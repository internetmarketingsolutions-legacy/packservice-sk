<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Serializer\XmlRoot("zasielka")
 */
class Package
{
    /**
     * @var Xml
     */
    protected $xml;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Serializer\SerializedName("dodanie")
     * @Serializer\Type("string")
     */
    protected $delivery;

    const DELIVERY_ECONOMY = 'posta';
    const DELIVERY_PRIORITY = 'posta1';
    const DELIVERY_COURIER = 'kurier';
    const DELIVERY_PERSONALLY = 'osobne';

    /**
     * @var string
     * @Serializer\SerializedName("firma")
     * @Serializer\Type("string")
     */
    protected $company;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Serializer\SerializedName("meno")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Serializer\SerializedName("ulica")
     * @Serializer\Type("string")
     */
    protected $street;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Serializer\SerializedName("psc")
     * @Serializer\Type("string")
     */
    protected $zip;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Serializer\SerializedName("mesto")
     * @Serializer\Type("string")
     */
    protected $city;

    /**
     * @var string
     * @Serializer\SerializedName("stat")
     * @Serializer\Type("string")
     */
    protected $country;

    /**
     * @var string
     * @Serializer\SerializedName("telefon")
     * @Serializer\Type("string")
     */
    protected $phone;

    /**
     * @var string
     * @Serializer\SerializedName("email")
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * @var float
     * @Serializer\SerializedName("hodnota")
     * @Serializer\Type("double")
     */
    protected $valuepack;

    /**
     * @var float
     * @Serializer\SerializedName("dobierka")
     * @Serializer\Type("double")
     */
    protected $cashondelivery;

    /**
     * @var string
     * @Serializer\SerializedName("doplndod")
     * @Serializer\Type("string")
     */
    protected $additional;

    /**
     * @var string
     * @Serializer\SerializedName("poznamka")
     * @Serializer\Type("string")
     */
    protected $memo;

    /**
     * @var string
     * @Serializer\SerializedName("poznamka_kurier")
     * @Serializer\Type("string")
     */
    protected $memocourier;

    /**
     * @var string
     * @Serializer\SerializedName("faurl")
     * @Serializer\Type("string")
     */
    protected $invoiceurl;

    /**
     * @var string
     * @Serializer\SerializedName("facislo")
     * @Serializer\Type("string")
     */
    protected $invoicenumber;

    /**
     * @var string
     * @Serializer\SerializedName("fanazov")
     * @Serializer\Type("string")
     */
    protected $invoicename;

    /**
     * @var string
     * @Serializer\SerializedName("faulica")
     * @Serializer\Type("string")
     */
    protected $invoicestreet;

    /**
     * @var string
     * @Serializer\SerializedName("fapsc")
     * @Serializer\Type("string")
     */
    protected $invoicezip;

    /**
     * @var string
     * @Serializer\SerializedName("famesto")
     * @Serializer\Type("string")
     */
    protected $invoicecity;

    /**
     * @var string
     * @Serializer\SerializedName("fastat")
     * @Serializer\Type("string")
     */
    protected $invoicecountry;

    /**
     * @var string
     * @Serializer\SerializedName("faico")
     * @Serializer\Type("string")
     */
    protected $invoiceregistrynumber;

    /**
     * @var string
     * @Serializer\SerializedName("fadic")
     * @Serializer\Type("string")
     */
    protected $invoicetaxnumber;

    /**
     * @var string
     * @Serializer\SerializedName("faicdph")
     * @Serializer\Type("string")
     */
    protected $invoicevatnumber;

    /**
     * @var float
     * @Serializer\SerializedName("fasumabezdph")
     * @Serializer\Type("double")
     */
    protected $invoicetotalwithouttax;

    /**
     * @var float
     * @Serializer\SerializedName("fasumasdph")
     * @Serializer\Type("double")
     */
    protected $invoicetotal;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("favystavena")
     * @Serializer\Type("DateTime")
     */
    protected $invoicedateofissue;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("fasplatna")
     * @Serializer\Type("DateTime")
     */
    protected $invoiceduedate;

    /**
     * @var string
     * @Serializer\SerializedName("faprevodom")
     * @Serializer\Type("string")
     */
    protected $invoicepaymentmethod;

    /**
     * @var Product[]
     * @Assert\Valid
     * @Serializer\SerializedName("polozky")
     * @Serializer\XmlList(inline=false, entry="polozka")
     * @Serializer\Type("ArrayCollection<InternetMarketingSolutions\PackserviceSk\Import\Product>")
     */
    protected $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @param Xml $xml
     * @param bool $stopPropagation
     * @return $this
     */
    public function setXml(Xml $xml = null, $stopPropagation = false)
    {
        if (!$stopPropagation) {
            if(!is_null($this->xml)) {
                $this->xml->removePackage($this, true);
            }
            $xml->addPackage($this, true);
        }
        $this->xml = $xml;
        return $this;
    }

    /**
     * @return Xml
     */
    public function getXml()
    {
        return $this->xml;
    }

    /**
     * @return Xml
     */
    public function end()
    {
        return $this->getXml();
    }

    /**
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $delivery
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
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
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $zip
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param float $valuepack
     * @return $this
     */
    public function setValuepack($valuepack)
    {
        $this->valuepack = $valuepack;
        return $this;
    }

    /**
     * @return float
     */
    public function getValuepack()
    {
        return $this->valuepack;
    }

    /**
     * @param float $cashondelivery
     * @return $this
     */
    public function setCashondelivery($cashondelivery)
    {
        $this->cashondelivery = $cashondelivery;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashondelivery()
    {
        return $this->cashondelivery;
    }

    /**
     * @param string $additional
     * @return $this
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * @param string $memo
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * @param string $memocourier
     * @return $this
     */
    public function setMemocourier($memocourier)
    {
        $this->memocourier = $memocourier;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemocourier()
    {
        return $this->memocourier;
    }

    /**
     * @param string $invoiceurl
     * @return $this
     */
    public function setInvoiceurl($invoiceurl)
    {
        $this->invoiceurl = $invoiceurl;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceurl()
    {
        return $this->invoiceurl;
    }

    /**
     * @param string $invoicenumber
     * @return $this
     */
    public function setInvoicenumber($invoicenumber)
    {
        $this->invoicenumber = $invoicenumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * @param string $invoicename
     * @return $this
     */
    public function setInvoicename($invoicename)
    {
        $this->invoicename = $invoicename;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicename()
    {
        return $this->invoicename;
    }

    /**
     * @param string $invoicestreet
     * @return $this
     */
    public function setInvoicestreet($invoicestreet)
    {
        $this->invoicestreet = $invoicestreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicestreet()
    {
        return $this->invoicestreet;
    }

    /**
     * @param string $invoicezip
     * @return $this
     */
    public function setInvoicezip($invoicezip)
    {
        $this->invoicezip = $invoicezip;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicezip()
    {
        return $this->invoicezip;
    }

    /**
     * @param string $invoicecity
     * @return $this
     */
    public function setInvoicecity($invoicecity)
    {
        $this->invoicecity = $invoicecity;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicecity()
    {
        return $this->invoicecity;
    }

    /**
     * @param string $invoicecountry
     * @return $this
     */
    public function setInvoicecountry($invoicecountry)
    {
        $this->invoicecountry = $invoicecountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicecountry()
    {
        return $this->invoicecountry;
    }

    /**
     * @param string $invoiceregistrynumber
     * @return $this
     */
    public function setInvoiceregistrynumber($invoiceregistrynumber)
    {
        $this->invoiceregistrynumber = $invoiceregistrynumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceregistrynumber()
    {
        return $this->invoiceregistrynumber;
    }

    /**
     * @param string $invoicetaxnumber
     * @return $this
     */
    public function setInvoicetaxnumber($invoicetaxnumber)
    {
        $this->invoicetaxnumber = $invoicetaxnumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicetaxnumber()
    {
        return $this->invoicetaxnumber;
    }

    /**
     * @param string $invoicevatnumber
     * @return $this
     */
    public function setInvoicevatnumber($invoicevatnumber)
    {
        $this->invoicevatnumber = $invoicevatnumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicevatnumber()
    {
        return $this->invoicevatnumber;
    }

    /**
     * @param float $invoicetotalwithouttax
     * @return $this
     */
    public function setInvoicetotalwithouttax($invoicetotalwithouttax)
    {
        $this->invoicetotalwithouttax = $invoicetotalwithouttax;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoicetotalwithouttax()
    {
        return $this->invoicetotalwithouttax;
    }

    /**
     * @param float $invoicetotal
     * @return $this
     */
    public function setInvoicetotal($invoicetotal)
    {
        $this->invoicetotal = $invoicetotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoicetotal()
    {
        return $this->invoicetotal;
    }

    /**
     * @param \DateTime $invoicedateofissue
     * @return $this
     */
    public function setInvoicedateofissue($invoicedateofissue)
    {
        $this->invoicedateofissue = $invoicedateofissue;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicedateofissue()
    {
        return $this->invoicedateofissue;
    }

    /**
     * @param \DateTime $invoiceduedate
     * @return $this
     */
    public function setInvoiceduedate($invoiceduedate)
    {
        $this->invoiceduedate = $invoiceduedate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceduedate()
    {
        return $this->invoiceduedate;
    }

    /**
     * @param string $invoicepaymentmethod
     * @return $this
     */
    public function setInvoicepaymentmethod($invoicepaymentmethod)
    {
        $this->invoicepaymentmethod = $invoicepaymentmethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicepaymentmethod()
    {
        return $this->invoicepaymentmethod;
    }

    /**
     * @param Product $product
     * @param bool $stopPropagation
     * @return Product
     */
    public function addProduct(Product $product = null, $stopPropagation = false)
    {
        if(is_null($product)) {
            $product = new Product();
        }
        if (!$stopPropagation) {
            $product->setPackage($this, true);
        }
        $this->products->add($product);
        return $product;
    }

    /**
     * @param Product $product
     * @param $stopPropagation
     * @return $this
     */
    public function removeProduct(Product $product, $stopPropagation = fals)
    {
        if (!$stopPropagation) {
            $product->setPackage(null, true);
        }
        $this->products->removeElement($product);
        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }
}
