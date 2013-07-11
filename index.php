<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use InternetMarketingSolutions\PackserviceSk\Import\Package;
use InternetMarketingSolutions\PackserviceSk\Import\Xml;
use InternetMarketingSolutions\PackserviceSk\PackserviceSk;
use Payment\HttpClient\BuzzClient;

$loader = require 'vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$xml = new Xml();
$xml
    ->addPackage()
        ->setId('0000001')
        ->setDelivery(Package::DELIVERY_ECONOMY)
        ->setName('Hans Mustermann')
        ->setStreet('Musterstrasse 0')
        ->setZip('0000')
        ->setCity('Musterort')
        ->setCountry('CH')
        ->addProduct()
            ->setSku('brand0000001')
            ->setAmount(2)
            ->setName('Product 1')
            ->setPrice(20000)
            ->setVat(1600)
        ->end()
        ->addProduct()
            ->setSku('brand0000002')
            ->setAmount(2)
            ->setName('Product 2')
            ->setPrice(30000)
            ->setVat(2400)
        ->end()
    ->end()
;

$packageServiceSk = new PackserviceSk();
$packageServiceSk->setHttpClient(new BuzzClient());
$violationList = $packageServiceSk->validate($xml);
if(!$violationList->count()) {
    $packageServiceSk->import('idkey', 'apikey', $xml);
}