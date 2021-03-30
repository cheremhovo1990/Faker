<?php

namespace Cheremhovo1990\Faker\Provider\hu_HU;

class Company extends \Cheremhovo1990\Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT');
}
