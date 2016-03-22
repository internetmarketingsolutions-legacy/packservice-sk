<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * @Assert\Callback(methods={"isIdValid"})
 * @Serializer\XmlRoot("polozka")
 */
class Product
{
    /**
     * @var Package
     */
    protected $package;

    /**
     * @var string
     * @Serializer\SerializedName("idpol")
     * @Serializer\Type("string")
     */
    protected $serviceid;

    /**
     * @var string
     * @Serializer\SerializedName("ean")
     * @Serializer\Type("string")
     */
    protected $ean;

    /**
     * @var string
     * @Serializer\SerializedName("ref")
     * @Serializer\Type("string")
     */
    protected $sku;

    /**
     * @var float
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @Serializer\SerializedName("pocet")
     * @Serializer\Type("double")
     */
    protected $amount;

    /**
     * @var string
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @Serializer\SerializedName("nazov")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var float
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @Serializer\SerializedName("cena")
     * @Serializer\Type("double")
     */
    protected $price;

    /**
     * @var float
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @Serializer\SerializedName("dph")
     * @Serializer\Type("double")
     */
    protected $vat;

    /**
     * @param Package $package
     * @param bool $stopPropagation
     * @return $this
     */
    public function setPackage(Package $package = null, $stopPropagation = false)
    {
        if (!$stopPropagation) {
            if(!is_null($this->package)) {
                $this->package->removeProduct($this, true);
            }
            $package->addProduct($this, true);
        }
        $this->package = $package;
        return $this;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @return Package
     */
    public function end()
    {
        return $this->getPackage();
    }

    /**
     * @param string $serviceid
     * @return $this
     */
    public function setServiceid($serviceid)
    {
        $this->serviceid = $serviceid;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }

    /**
     * @param string $ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
        return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $vat
     * @return $this
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param ExecutionContextInterface $context
     */
    public function isIdValid(ExecutionContextInterface $context)
    {
        if(!$this->getServiceid() && !$this->getEan() && !$this->getSku()) {
            $message = 'One of this 3 properties have to be set: serviceid, ean, sku';
            $context->addViolationAt('serviceid', $message);
            $context->addViolationAt('ean', $message);
            $context->addViolationAt('sku', $message);
        }
    }
}
