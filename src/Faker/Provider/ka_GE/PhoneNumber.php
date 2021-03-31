<?php

namespace Cheremhovo1990\Faker\Provider\ka_GE;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+995 ### ## ## ##',
        '### ## ## ##',
        '#########',
        '(###) ## ## ##',
        '+995(##)#######',
    );
}
