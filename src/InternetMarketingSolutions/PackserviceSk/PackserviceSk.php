<?php

namespace InternetMarketingSolutions\PackserviceSk;

use Doctrine\Common\Annotations\AnnotationReader;
use InternetMarketingSolutions\PackserviceSk\Import\Response;
use InternetMarketingSolutions\PackserviceSk\Import\Xml;
use InternetMarketingSolutions\PackserviceSk\Serializer\PackageserviceSkXmlSerializationVisitor;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use Payment\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Exception\ValidatorException;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\ValidatorInterface;

class PackserviceSk
{
    /**
     * @var AnnotationReader
     */
    protected $annotationReader;

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var HttpClientInterface
     */
    protected $httpClient;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param AnnotationReader $annotationReader
     * @return $this
     */
    public function setAnnotationReader(AnnotationReader $annotationReader)
    {
        $this->annotationReader = $annotationReader;
        return $this;
    }

    /**
     * @return AnnotationReader
     */
    protected function getAnnotationReader()
    {
        if(is_null($this->annotationReader)) {
            $this->annotationReader = new AnnotationReader();
        }
        return $this->annotationReader;
    }

    /**
     * @param ValidatorInterface $validator
     * @return $this
     */
    public function setValidator(ValidatorInterface $validator)
    {
        $this->validator = $validator;
        return $this;
    }

    /**
     * @return ValidatorInterface
     */
    public function getValidator()
    {
        if(is_null($this->validator)) {
            $this->validator = Validation::createValidatorBuilder()
                ->enableAnnotationMapping($this->getAnnotationReader())
                ->getValidator()
            ;
        }

        return $this->validator;
    }

    /**
     * @param SerializerInterface $serializer
     * @return $this
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer()
    {
        if(is_null($this->serializer)) {
            $propertyNamingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
            $this->serializer = SerializerBuilder::create()
                ->setAnnotationReader($this->getAnnotationReader())
                ->setPropertyNamingStrategy($propertyNamingStrategy)
                ->setSerializationVisitor('xml', new PackageserviceSkXmlSerializationVisitor($propertyNamingStrategy))
                ->setDeserializationVisitor('xml', new XmlDeserializationVisitor($propertyNamingStrategy))
                ->build()
            ;
        }

        return $this->serializer;
    }

    /**
     * @param HttpClientInterface $httpClient
     * @return $this
     */
    public function setHttpClient(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @return HttpClientInterface
     * @throws \Exception
     */
    protected function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            throw new \Exception('Please define a http client based on the HttpClientInterface!');
        }

        return $this->httpClient;
    }

    /**
     * @param LoggerInterface $logger
     * @return $this
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @return LoggerInterface
     */
    protected function getLogger()
    {
        if(is_null($this->logger)) {
            $this->setLogger(new NullLogger);
        }

        return $this->logger;
    }

    /**
     * @param mixed $data
     * @return ConstraintViolationListInterface
     */
    public function validate($data)
    {
        return $this->getValidator()->validate($data);
    }

    /**
     * @param string $idkey
     * @param string $apikey
     * @param Xml $xml
     * @return Response
     * @throws \Exception
     */
    public function import($idkey, $apikey, Xml $xml)
    {
        $xml = $this->getSerializer()->serialize($xml, 'xml');

        $httpResponse = $this
            ->getHttpClient()
            ->request(
                HttpClientInterface::METHOD_POST,
                'https://klient.packservice.sk/api/import/?idkey=' . $idkey . '&apikey=' . $apikey,
                http_build_query(array('data' => $xml)),
                array('Content-Type' => 'application/x-www-form-urlencoded')
            )
        ;

        $content = $httpResponse->getContent();
        
        if (200 !== $statusCode = $httpResponse->getStatusCode()) {
            if (403 === $statusCode) {
                 throw new \Exception(sprintf('Authorization error: %s', $content));
            }
            
            throw new \Exception(sprintf('Generic http error (%d): %s', $statusCode, $content));
        }

        /** @var Response $response */
        $response = $this
            ->getSerializer()
            ->deserialize($content, 'InternetMarketingSolutions\PackserviceSk\Import\Response', 'xml');

        $shipmentResponse = $response->getShipment()->getResponse();

        // assign bad input
        if (strrpos($shipmentResponse, 'ERROR-badinput-') === 0) {
            $response->getShipment()->setInputErrors(json_decode(substr($shipmentResponse, 15), true));
        }

        return $response;
    }
}
