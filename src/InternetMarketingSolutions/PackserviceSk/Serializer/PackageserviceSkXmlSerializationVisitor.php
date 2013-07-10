<?php

namespace InternetMarketingSolutions\PackserviceSk\Serializer;

use JMS\Serializer\Context;
use JMS\Serializer\XmlSerializationVisitor;

class PackageserviceSkXmlSerializationVisitor extends XmlSerializationVisitor
{
    private $currentNode;

    public function visitString($data, array $type, Context $context)
    {
        if (null === $this->document) {
            $this->document = $this->createDocument(null, null, true);
            $this->currentNode->appendChild($this->document->createTextNode($data));

            return;
        }

        return $this->document->createTextNode($data);
    }
}