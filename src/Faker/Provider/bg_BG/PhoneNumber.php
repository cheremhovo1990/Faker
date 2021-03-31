<?php

namespace Cheremhovo1990\Faker\Provider\bg_BG;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+359(0)#########',
        '+359(0)### ######',
        '+359(0)### ### ###',
        '+359#########',
        '0#########',
        '0### ######',
        '0### ### ###',
        '0### ###-###',
        '(0###) ######',
        '(0###) ### ###',
        '(0###) ###-###',
    );
}
