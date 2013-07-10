<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Serializer\XmlRoot("xml")
 */
class Xml
{
    /**
     * @var Package[]
     * @Assert\Valid
     * @Serializer\XmlList(inline=true, entry="zasielka")
     * @Serializer\Type("ArrayCollection<InternetMarketingSolutions\PackserviceSk\Import\Package>")
     */
    protected $packages;

    public function __construct()
    {
        $this->packages = new ArrayCollection();
    }

    /**
     * @param Package $package
     * @param bool $stopPropagation
     * @return Package
     */
    public function addPackage(Package $package = null, $stopPropagation = false)
    {
        if(is_null($package)) {
            $package = new Package();
        }
        if (!$stopPropagation) {
            $package->setXml($this, true);
        }
        $this->packages->add($package);
        return $package;
    }

    /**
     * @param Package $package
     * @param bool $stopPropagation
     * @return $this
     */
    public function removePackage(Package $package, $stopPropagation = false)
    {
        if (!$stopPropagation) {
            $package->setXml(null, true);
        }

        $this->packages->removeElement($package);
        return $this;
    }

    /**
     * @return Package[]
     */
    public function getPackages()
    {
        return $this->packages;
    }
}