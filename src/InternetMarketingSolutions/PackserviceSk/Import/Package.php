<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

class Package
{
    protected $mapping = array(
        'id' => 'id', // obigatorisch
        'delivery' => 'dodanie', // obigatorisch
        'company' => 'firma',
        'name' => 'meno',  // obigatorisch
        'street' => 'ulica',  // obigatorisch
        'zip' => 'psc',  // obigatorisch
        'city' => 'mesto',  // obigatorisch
        'country' => 'stat',
        'phone' => 'telefon',
        'email' => 'email',
        'valuepack' => 'hodnota',
        'cashondelivery' => 'dobierka',
        'additional' => 'doplndod',
        'memo' => 'poznamka',
        'memocourier' => 'poznamka_kurier',
    );
}