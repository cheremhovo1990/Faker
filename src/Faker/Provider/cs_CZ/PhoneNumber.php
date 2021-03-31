<?php

namespace Cheremhovo1990\Faker\Provider\cs_CZ;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+420 %## ### ###',
        '%## ### ###',
        '00420%########',
        '+420%########',
        '%########',
    );
}
