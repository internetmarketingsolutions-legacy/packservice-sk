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
     * @return $this
     */
    public function addPackage(Package $package)
    {
        $this->packages->add($package);
        return $this;
    }

    /**
     * @param Package $package
     * @return $this
     */
    public function removePackage(Package $package)
    {
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