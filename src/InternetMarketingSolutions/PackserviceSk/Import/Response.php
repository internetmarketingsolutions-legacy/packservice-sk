<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("RESPONSE")
 */
class Response
{
    /**
     * @var Shipment
     * @Serializer\SerializedName("zasielka")
     * @Serializer\Type("InternetMarketingSolutions\PackserviceSk\Import\Shipment")
     */
    protected $shipment;

    /**
     * @return Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param Shipment $shipment
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
    }
}
