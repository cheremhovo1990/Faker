<?php

namespace Cheremhovo1990\Faker\Provider\en_IN;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+91 ## ########',
        '+91 ### #######',
        '0## ########',
        '0### #######'
    );

    /**
     * An array of en_IN mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
        '+91 9#########',
        '+91 8#########',
        '+91 7#########',
        '09#########',
        '08#########',
        '07#########'
    );

    /**
     * Return a en_IN mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
