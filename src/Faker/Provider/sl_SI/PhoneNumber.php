<?php

namespace Cheremhovo1990\Faker\Provider\sl_SI;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+386 ## ### ###',
        '00386 ## ### ###',
        '0## ### ###',
        '00386########',
        '+386########',
        '0########',
        '+386 # ### ####',
        '00386 # ### ####',
        '0# ### ####'
    );
}
