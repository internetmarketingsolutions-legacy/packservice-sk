<?php

$loader = require 'vendor/autoload.php';

// annotation registry
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$xml = new \InternetMarketingSolutions\PackserviceSk\Import\Xml();
$xml
    ->addPackage()
        ->setId('0000001')
        ->setName('test')
        ->addProduct()
            //->setServiceid('5901234123457')
            //->setEan('5-901234-12345')
            //->setSku('5-901234123457')
            ->setAmount(2)
            ->setName('Product 1')
            ->setPrice(20000)
            ->setVat(1600)
        ->end()
        ->addProduct()
            //->setServiceid('5901234123457')
            //->setEan('5-901234-12345')
            //->setSku('5-901234123457')
            ->setAmount(1)
            ->setName('Product 2')
            ->setPrice(30000)
            ->setVat(2400)
        ->end()
    ->end()
    ->addPackage()
        ->setId('0000002')
        ->setName('test')
        ->addProduct()
            //->setServiceid('5901234123457')
            //->setEan('5-901234-12345')
            //->setSku('5-901234123457')
            ->setAmount(3)
            ->setName('Product 3')
            ->setPrice(10000)
            ->setVat(800)
        ->end()
    ->end()
;

$annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();

$validator = \Symfony\Component\Validator\Validation::createValidatorBuilder()
    ->enableAnnotationMapping($annotationReader)
    ->getValidator()
;


$violations = $validator->validate($xml);
var_dump($violations);

$propertyNamingStrategy = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy());
$serializer = \JMS\Serializer\SerializerBuilder::create()
    ->setAnnotationReader($annotationReader)
    ->setPropertyNamingStrategy($propertyNamingStrategy)
    ->setSerializationVisitor('xml', new \InternetMarketingSolutions\PackserviceSk\Serializer\PackageserviceSkXmlSerializationVisitor($propertyNamingStrategy))
    ->build()
;
$test = $serializer->serialize($xml, 'xml');

var_dump($test);