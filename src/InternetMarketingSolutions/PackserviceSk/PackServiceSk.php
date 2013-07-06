<?php

namespace InternetMarketingSolutions\PackserviceSk;

use Payment\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class PackServiceSk
{
    /**
     * @var HttpClientInterface
     */
    protected $httpClient;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     * @return PackServiceSk
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
     * @param HttpClientInterface $httpClient
     * @return PackServiceSk
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
    public function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            throw new \Exception('Please define a http client based on the HttpClientInterface!');
        }

        return $this->httpClient;
    }

    public function import()
    {

    }
}