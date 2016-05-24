<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("zasielka")
 */
class Shipment
{
    /**
     * @var integer
     * @Serializer\SerializedName("id")
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var integer
     * @Serializer\SerializedName("idps")
     * @Serializer\Type("integer")
     */
    protected $idps;

    /**
     * @var string
     * @Serializer\SerializedName("response")
     * @Serializer\Type("string")
     */
    protected $response;

    /**
     * @var string
     */
    protected $error;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getIdps()
    {
        return $this->idps;
    }

    /**
     * @param integer $idps
     */
    public function setIdps($idps)
    {
        $this->idps = $idps;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param string $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }
}
