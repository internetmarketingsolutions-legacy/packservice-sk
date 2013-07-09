<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use Doctrine\Common\Collections\ArrayCollection;
use InternetMarketingSolutions\PackserviceSk\Annotation as PackserviceSk;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("zasielka")
 */
class Package
{
    /**
     * @var int
     * @PackserviceSk\Required
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var string
     * @PackserviceSk\Required
     * @Serializer\SerializedName("dodanie")
     */
    protected $delivery;

    /**
     * @var string
     * @Serializer\SerializedName("firma")
     */
    protected $company;

    /**
     * @var string
     * @PackserviceSk\Required
     * @Serializer\SerializedName("meno")
     */
    protected $name;

    /**
     * @var string
     * @PackserviceSk\Required
     * @Serializer\SerializedName("ulica")
     */
    protected $street;

    /**
     * @var string
     * @PackserviceSk\Required
     * @Serializer\SerializedName("psc")
     */
    protected $zip;

    /**
     * @var string
     * @PackserviceSk\Required
     * @Serializer\SerializedName("mesto")
     */
    protected $city;

    /**
     * @var string
     * @Serializer\SerializedName("stat")
     */
    protected $country;

    /**
     * @var string
     * @Serializer\SerializedName("telefon")
     */
    protected $phone;

    /**
     * @var string
     * @Serializer\SerializedName("email")
     */
    protected $email;

    /**
     * @var float
     * @Serializer\SerializedName("hodnota")
     */
    protected $valuepack;

    /**
     * @var float
     * @Serializer\SerializedName("dobierka")
     */
    protected $cashondelivery;

    /**
     * @var string
     * @Serializer\SerializedName("doplndod")
     */
    protected $additional;

    /**
     * @var string
     * @Serializer\SerializedName("poznamka")
     */
    protected $memo;

    /**
     * @var string
     * @Serializer\SerializedName("poznamka_kurier")
     */
    protected $memocourier;

    /**
     * @var string
     * @Serializer\SerializedName("faurl")
     */
    protected $invoiceurl;

    /**
     * @var string
     * @Serializer\SerializedName("facislo")
     */
    protected $invoicenumber;

    /**
     * @var string
     * @Serializer\SerializedName("fanazov")
     */
    protected $invoicename;

    /**
     * @var string
     * @Serializer\SerializedName("faulica")
     */
    protected $invoicestreet;

    /**
     * @var string
     * @Serializer\SerializedName("fapsc")
     */
    protected $invoicezip;

    /**
     * @var string
     * @Serializer\SerializedName("famesto")
     */
    protected $invoicecity;

    /**
     * @var string
     * @Serializer\SerializedName("fastat")
     */
    protected $invoicecountry;

    /**
     * @var string
     * @Serializer\SerializedName("faico")
     */
    protected $invoiceregistrynumber;

    /**
     * @var string
     * @Serializer\SerializedName("fadic")
     */
    protected $invoicetaxnumber;

    /**
     * @var string
     * @Serializer\SerializedName("faicdph")
     */
    protected $invoicevatnumber;

    /**
     * @var float
     * @Serializer\SerializedName("fasumabezdph")
     */
    protected $invoicetotalwithouttax;

    /**
     * @var float
     * @Serializer\SerializedName("fasumasdph")
     */
    protected $invoicetotal;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("favystavena")
     */
    protected $invoicedateofissue;

    /**
     * @var \DateTime
     * @Serializer\SerializedName("fasplatna")
     */
    protected $invoiceduedate;

    /**
     * @var string
     * @Serializer\SerializedName("faprevodom")
     */
    protected $invoicepaymentmethod;

    /**
     * @var Product[]
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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
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
     * @return $this
     */
    public function addProduct(Product $product)
    {
        $this->products->add($product);
        return $this;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function removeProduct(Product $product)
    {
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