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
     * @Serializer\SerializedName("country")
     * @Serializer\Type("string")
     */
    protected $country;

    const COUNTRY_AF = 'AFG';
    const COUNTRY_AL = 'ALB';
    const COUNTRY_DZ = 'DZA';
    const COUNTRY_AD = 'AND';
    const COUNTRY_AO = 'AGO';
    const COUNTRY_AG = 'ATG';
    const COUNTRY_AR = 'ARG';
    const COUNTRY_AM = 'ARM';
    const COUNTRY_AU = 'AUS';
    const COUNTRY_AT = 'AUT';
    const COUNTRY_AZ = 'AZE';
    const COUNTRY_BS = 'BHS';
    const COUNTRY_BH = 'BHR';
    const COUNTRY_BD = 'BGD';
    const COUNTRY_BB = 'BRB';
    const COUNTRY_BY = 'BLR';
    const COUNTRY_BE = 'BEL';
    const COUNTRY_BZ = 'BLZ';
    const COUNTRY_BJ = 'BEN';
    const COUNTRY_BT = 'BTN';
    const COUNTRY_BO = 'BOL';
    const COUNTRY_BA = 'BIH';
    const COUNTRY_BW = 'BWA';
    const COUNTRY_BR = 'BRA';
    const COUNTRY_BN = 'BRN';
    const COUNTRY_BG = 'BGR';
    const COUNTRY_BF = 'BFA';
    const COUNTRY_BI = 'BDI';
    const COUNTRY_KH = 'KHM';
    const COUNTRY_CM = 'CMR';
    const COUNTRY_CA = 'CAN';
    const COUNTRY_CV = 'CPV';
    const COUNTRY_CF = 'CAF';
    const COUNTRY_TD = 'TCD';
    const COUNTRY_CL = 'CHL';
    const COUNTRY_CN = 'CHN';
    const COUNTRY_CO = 'COL';
    const COUNTRY_KM = 'COM';
    const COUNTRY_CD = 'COD';
    const COUNTRY_CG = 'COG';
    const COUNTRY_CR = 'CRI';
    const COUNTRY_CI = 'CIV';
    const COUNTRY_HR = 'HRV';
    const COUNTRY_CU = 'CUB';
    const COUNTRY_CY = 'CYP';
    const COUNTRY_CZ = 'CZE';
    const COUNTRY_DK = 'DNK';
    const COUNTRY_DJ = 'DJI';
    const COUNTRY_DM = 'DMA';
    const COUNTRY_DO = 'DOM';
    const COUNTRY_EC = 'ECU';
    const COUNTRY_EG = 'EGY';
    const COUNTRY_SV = 'SLV';
    const COUNTRY_GQ = 'GNQ';
    const COUNTRY_ER = 'ERI';
    const COUNTRY_EE = 'EST';
    const COUNTRY_ET = 'ETH';
    const COUNTRY_FJ = 'FJI';
    const COUNTRY_FI = 'FIN';
    const COUNTRY_FR = 'FRA';
    const COUNTRY_GA = 'GAB';
    const COUNTRY_GM = 'GMB';
    const COUNTRY_GE = 'GEO';
    const COUNTRY_DE = 'DEU';
    const COUNTRY_GH = 'GHA';
    const COUNTRY_GR = 'GRC';
    const COUNTRY_GD = 'GRD';
    const COUNTRY_GT = 'GTM';
    const COUNTRY_GN = 'GIN';
    const COUNTRY_GW = 'GNB';
    const COUNTRY_GY = 'GUY';
    const COUNTRY_HT = 'HTI';
    const COUNTRY_HN = 'HND';
    const COUNTRY_HU = 'HUN';
    const COUNTRY_IS = 'ISL';
    const COUNTRY_IN = 'IND';
    const COUNTRY_ID = 'IDN';
    const COUNTRY_IR = 'IRN';
    const COUNTRY_IQ = 'IRQ';
    const COUNTRY_IE = 'IRL';
    const COUNTRY_IL = 'ISR';
    const COUNTRY_IT = 'ITA';
    const COUNTRY_JM = 'JAM';
    const COUNTRY_JP = 'JPN';
    const COUNTRY_JO = 'JOR';
    const COUNTRY_KZ = 'KAZ';
    const COUNTRY_KE = 'KEN';
    const COUNTRY_KI = 'KIR';
    const COUNTRY_KP = 'PRK';
    const COUNTRY_KR = 'KOR';
    const COUNTRY_KW = 'KWT';
    const COUNTRY_KG = 'KGZ';
    const COUNTRY_LA = 'LAO';
    const COUNTRY_LV = 'LVA';
    const COUNTRY_LB = 'LBN';
    const COUNTRY_LS = 'LSO';
    const COUNTRY_LR = 'LBR';
    const COUNTRY_LY = 'LBY';
    const COUNTRY_LI = 'LIE';
    const COUNTRY_LT = 'LTU';
    const COUNTRY_LU = 'LUX';
    const COUNTRY_MK = 'MKD';
    const COUNTRY_MG = 'MDG';
    const COUNTRY_MW = 'MWI';
    const COUNTRY_MY = 'MYS';
    const COUNTRY_MV = 'MDV';
    const COUNTRY_ML = 'MLI';
    const COUNTRY_MT = 'MLT';
    const COUNTRY_MH = 'MHL';
    const COUNTRY_MR = 'MRT';
    const COUNTRY_MU = 'MUS';
    const COUNTRY_MX = 'MEX';
    const COUNTRY_FM = 'FSM';
    const COUNTRY_MD = 'MDA';
    const COUNTRY_MC = 'MCO';
    const COUNTRY_MN = 'MNG';
    const COUNTRY_ME = 'MNE';
    const COUNTRY_MA = 'MAR';
    const COUNTRY_MZ = 'MOZ';
    const COUNTRY_MM = 'MMR';
    const COUNTRY_NA = 'NAM';
    const COUNTRY_NR = 'NRU';
    const COUNTRY_NP = 'NPL';
    const COUNTRY_NL = 'NLD';
    const COUNTRY_NZ = 'NZL';
    const COUNTRY_NI = 'NIC';
    const COUNTRY_NE = 'NER';
    const COUNTRY_NG = 'NGA';
    const COUNTRY_NO = 'NOR';
    const COUNTRY_OM = 'OMN';
    const COUNTRY_PK = 'PAK';
    const COUNTRY_PW = 'PLW';
    const COUNTRY_PA = 'PAN';
    const COUNTRY_PG = 'PNG';
    const COUNTRY_PY = 'PRY';
    const COUNTRY_PE = 'PER';
    const COUNTRY_PH = 'PHL';
    const COUNTRY_PL = 'POL';
    const COUNTRY_PT = 'PRT';
    const COUNTRY_QA = 'QAT';
    const COUNTRY_RO = 'ROU';
    const COUNTRY_RU = 'RUS';
    const COUNTRY_RW = 'RWA';
    const COUNTRY_KN = 'KNA';
    const COUNTRY_LC = 'LCA';
    const COUNTRY_VC = 'VCT';
    const COUNTRY_WS = 'WSM';
    const COUNTRY_SM = 'SMR';
    const COUNTRY_ST = 'STP';
    const COUNTRY_SA = 'SAU';
    const COUNTRY_SN = 'SEN';
    const COUNTRY_RS = 'SRB';
    const COUNTRY_SC = 'SYC';
    const COUNTRY_SL = 'SLE';
    const COUNTRY_SG = 'SGP';
    const COUNTRY_SK = 'SVK';
    const COUNTRY_SI = 'SVN';
    const COUNTRY_SB = 'SLB';
    const COUNTRY_SO = 'SOM';
    const COUNTRY_ZA = 'ZAF';
    const COUNTRY_ES = 'ESP';
    const COUNTRY_LK = 'LKA';
    const COUNTRY_SD = 'SDN';
    const COUNTRY_SR = 'SUR';
    const COUNTRY_SZ = 'SWZ';
    const COUNTRY_SE = 'SWE';
    const COUNTRY_CH = 'CHE';
    const COUNTRY_SY = 'SYR';
    const COUNTRY_TJ = 'TJK';
    const COUNTRY_TZ = 'TZA';
    const COUNTRY_TH = 'THA';
    const COUNTRY_TL = 'TLS';
    const COUNTRY_TG = 'TGO';
    const COUNTRY_TO = 'TON';
    const COUNTRY_TT = 'TTO';
    const COUNTRY_TN = 'TUN';
    const COUNTRY_TR = 'TUR';
    const COUNTRY_TM = 'TKM';
    const COUNTRY_TV = 'TUV';
    const COUNTRY_UG = 'UGA';
    const COUNTRY_UA = 'UKR';
    const COUNTRY_AE = 'ARE';
    const COUNTRY_GB = 'GBR';
    const COUNTRY_US = 'USA';
    const COUNTRY_UY = 'URY';
    const COUNTRY_UZ = 'UZB';
    const COUNTRY_VU = 'VUT';
    const COUNTRY_VA = 'VAT';
    const COUNTRY_VE = 'VEN';
    const COUNTRY_VN = 'VNM';
    const COUNTRY_YE = 'YEM';
    const COUNTRY_ZM = 'ZMB';
    const COUNTRY_ZW = 'ZWE';
    const COUNTRY_TW = 'TWN';
    const COUNTRY_CX = 'CXR';
    const COUNTRY_CC = 'CCK';
    const COUNTRY_HM = 'HMD';
    const COUNTRY_NF = 'NFK';
    const COUNTRY_NC = 'NCL';
    const COUNTRY_PF = 'PYF';
    const COUNTRY_YT = 'MYT';
    const COUNTRY_GP = 'GLP';
    const COUNTRY_PM = 'SPM';
    const COUNTRY_WF = 'WLF';
    const COUNTRY_TF = 'ATF';
    const COUNTRY_BV = 'BVT';
    const COUNTRY_CK = 'COK';
    const COUNTRY_NU = 'NIU';
    const COUNTRY_TK = 'TKL';
    const COUNTRY_GG = 'GGY';
    const COUNTRY_IM = 'IMN';
    const COUNTRY_JE = 'JEY';
    const COUNTRY_AI = 'AIA';
    const COUNTRY_BM = 'BMU';
    const COUNTRY_IO = 'IOT';
    const COUNTRY_VG = 'VGB';
    const COUNTRY_KY = 'CYM';
    const COUNTRY_FK = 'FLK';
    const COUNTRY_GI = 'GIB';
    const COUNTRY_MS = 'MSR';
    const COUNTRY_PN = 'PCN';
    const COUNTRY_SH = 'SHN';
    const COUNTRY_GS = 'SGS';
    const COUNTRY_TC = 'TCA';
    const COUNTRY_MP = 'MNP';
    const COUNTRY_PR = 'PRI';
    const COUNTRY_AS = 'ASM';
    const COUNTRY_UM = 'UMI';
    const COUNTRY_GU = 'GUM';
    const COUNTRY_VI = 'VIR';
    const COUNTRY_HK = 'HKG';
    const COUNTRY_MO = 'MAC';
    const COUNTRY_FO = 'FRO';
    const COUNTRY_GL = 'GRL';
    const COUNTRY_GF = 'GUF';
    const COUNTRY_MQ = 'MTQ';
    const COUNTRY_RE = 'REU';
    const COUNTRY_AX = 'ALA';
    const COUNTRY_AW = 'ABW';
    const COUNTRY_AN = 'ANT';
    const COUNTRY_SJ = 'SJM';
    const COUNTRY_AC = 'ASC';
    const COUNTRY_TA = 'TAA';
    const COUNTRY_AQ = 'ATA';

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
