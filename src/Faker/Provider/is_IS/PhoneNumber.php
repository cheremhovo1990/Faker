<?php

namespace Cheremhovo1990\Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    /**
     * @var array Icelandic phone number formats.
     */
    protected static $formats = array(
        '+354 ### ####',
        '+354 #######',
        '+354#######',
        '### ####',
        '#######',
    );
}
