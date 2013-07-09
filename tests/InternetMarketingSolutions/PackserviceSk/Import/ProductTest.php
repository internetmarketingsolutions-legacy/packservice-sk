<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use JMS\Serializer\SerializerBuilder;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testSetterGetterWithValidData()
    {
        $serviceId = '5901234123457';
        $ean = '5-901234-123457';
        $sku = '5-901234123457';
        $amount = 2;
        $name = 'Product 1';
        $price = 20000;
        $vat = 1600;

        $product = new Product();
        $product
            ->setServiceid($serviceId)
            ->setEan($ean)
            ->setSku($sku)
            ->setAmount($amount)
            ->setName($name)
            ->setPrice($price)
            ->setVat($vat)
        ;

        $this->assertEquals($serviceId, $product->getServiceid());
        $this->assertEquals($ean, $product->getEan());
        $this->assertEquals($sku, $product->getSku());
        $this->assertEquals($amount, $product->getAmount());
        $this->assertEquals($name, $product->getName());
        $this->assertEquals($price, $product->getPrice());
        $this->assertEquals($vat, $product->getVat());

        $serializer = SerializerBuilder::create()->build();
        $test = $serializer->serialize($product, 'xml');

        var_dump($test);
    }
}