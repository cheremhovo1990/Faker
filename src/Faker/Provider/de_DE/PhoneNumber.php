<?php

namespace Cheremhovo1990\Faker\Provider\de_DE;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+49(0)##########',
        '+49(0)#### ######',
        '+49 (0) #### ######',
        '+49(0) #########',
        '+49(0)#### #####',
        '0##########',
        '0#########',
        '0#### ######',
        '0#### #####',
        '(0####) ######',
        '(0####) #####',
    );
}
