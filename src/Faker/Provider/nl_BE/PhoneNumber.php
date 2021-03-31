<?php

namespace Cheremhovo1990\Faker\Provider\nl_BE;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+32(0)########',
        '+32(0)### ######',
        '+32(0)# #######',
        '0#########',
        '0### ######',
        '0### ### ###',
        '0### ## ## ##',
        '0## ######',
        '0## ## ## ##',
        '0# #######',
        '0# ### ## ##',
    );
}
