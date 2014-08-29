<?php

namespace Tactics\EntityConfigBundle\EntityConfig;

use Tactics\EntityConfigBundle\Entity\Person;
use Tactics\EntityConfigBundle\Interfaces\ConfigProviderInterface;

class ConfigProvider implements ConfigProviderInterface
{
    public function getConfig($classname)
    {
        return [
            'id' => [
                'type' => 'integer',
                'title' => 'Id',
                'value' => 'id'
            ],
            'birthdate' => [
                'type' => 'date',
                'title' => 'Birthdate',
                'format' => 'd/m/Y',
                'value' => 'birthdate'
            ],
            'name' => [
                'type' => 'string',
                'title' => 'Person name',
                'value' => 'name'
            ],
            'is_employed' => [
                'type' => 'boolean',
                'title' => 'Employed by us',
                'true_value' => 'Yes',
                'false_value' => 'No',
                'value' => 'isEmployed'
            ],
            'cars' => [
                'type' => 'foreign_collection',
                'link' => true,
                'title' => 'Cars owned by person',
                'value' => 'cars'
            ],
            'partner' => [
                'type' => 'foreign_key',
                'title' => 'Partner',
                'value' => 'partner'
            ],
            'marital_status' => [
                'type' => 'state',
                'title' => 'Marital status',
                'value' => 'maritalStatus'
            ],
            'bankroll' => [
                'type' => 'money',
                'precision' => 2,
                'currency' => 'EUR',
                'title' => 'Money in the bank',
                'value' => 'bankroll'
            ]
        ];
    }
} 