<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

class Product
{
    protected $mapping = array(
        // nur eine der folgenden ist Pflicht
        'serviceid' => 'idpol',
        'ean' => 'ean',
        'id' => 'ref',
        //-----
        'amount' => 'pocet', // obigatorisch
        'name' => 'nazov', // obigatorisch
        'price' => 'cena', // obigatorisch
        'vat' => 'dph', // obigatorisch
    );
}