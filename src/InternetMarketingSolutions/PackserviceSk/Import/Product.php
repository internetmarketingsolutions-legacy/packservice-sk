<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use InternetMarketingSolutions\PackserviceSk\Annotation as PackserviceSk;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("polozka")
 */
class Product
{
    /**
     * @var string
     * @PackserviceSk\RequiredOr("id")
     * @Serializer\SerializedName("idpol")
     */
    protected $serviceid;

    /**
     * @var string
     * @PackserviceSk\RequiredOr("id")
     * @Serializer\SerializedName("ean")
     */
    protected $ean;

    /**
     * @var string
     * @PackserviceSk\RequiredOr("id")
     * @Serializer\SerializedName("ref")
     */
    protected $sku;

    /**
     * @var float
     * @PackserviceSk\Required
     * @Serializer\SerializedName("pocet")
     */
    protected $amount;

    /**
     * @var string
     * @PackserviceSk\Required
     * @Serializer\SerializedName("nazov")
     */
    protected $name;

    /**
     * @var float
     * @PackserviceSk\Required
     * @Serializer\SerializedName("cena")
     */
    protected $price;

    /**
     * @var float
     * @PackserviceSk\Required
     * @Serializer\SerializedName("dph")
     */
    protected $vat;

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
}