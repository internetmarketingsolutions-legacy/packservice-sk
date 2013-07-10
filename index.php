<?php

$loader = require 'vendor/autoload.php';

// annotation registry
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

//$annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();
//
//$reflectionClass = new ReflectionClass('InternetMarketingSolutions\PackserviceSk\Import\Product');
//
//foreach($reflectionClass->getProperties() as $reflectionProperty) {
//    $propertyAnnotations = $annotationReader->getPropertyAnnotations($reflectionProperty);
//    var_dump($propertyAnnotations);
//}

$serviceId = '5901234123457';
$ean = '5-901234-123457';
$sku = '5-901234123457';
$amount = 2;
$name = 'Product 1';
$price = 20000;
$vat = 1600;

$product = new \InternetMarketingSolutions\PackserviceSk\Import\Product();
$product
//    ->setServiceid($serviceId)
//    ->setEan($ean)
//    ->setSku($sku)
    ->setAmount($amount)
    ->setName($name)
    ->setPrice($price)
    ->setVat($vat)
;

$package = new \InternetMarketingSolutions\PackserviceSk\Import\Package();
$package
    ->setId('0000001')
    ->setName('test')
    ->addProduct($product)
;

$xml = new \InternetMarketingSolutions\PackserviceSk\Import\Xml();
$xml->addPackage($package);
$xml->addPackage($package);

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