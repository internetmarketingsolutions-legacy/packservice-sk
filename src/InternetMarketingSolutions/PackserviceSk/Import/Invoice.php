<?php

namespace InternetMarketingSolutions\PackserviceSk\Import;

class Invoice
{
    protected $mapping = array(
        // eine URL zu einer Rechnung
        'url' => 'faurl',
        // oder das:
        'number' => 'facislo',
        'name' => 'fanazov',
        'street' => 'faulica',
        'zip' => 'fapsc',
        'city' => 'famesto',
        'country' => 'fastat',
        'registrynumber' => 'faico',
        'taxnumber' => 'fadic',
        'vatnumber' => 'faicdph',
        'totalwithouttax' => 'fasumabezdph',
        'total' => 'fasumasdph',
        'dateofissue' => 'favystavena',
        'duedate' => 'fasplatna',
        'paymentmethod' => 'faprevodom',
    );
}