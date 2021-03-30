<?php

namespace Cheremhovo1990\Faker\Provider\sk_SK;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+421 ### ### ###',
        '00421 ### ### ###',
        '#### ### ###',
        '00421#########',
        '+421#########',
        '########',
    );
}
