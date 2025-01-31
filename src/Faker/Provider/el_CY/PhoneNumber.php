<?php

namespace Cheremhovo1990\Faker\Provider\el_CY;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+3572#######',
        '+3579#######',
        '2#######',
        '9#######',
    );

    /**
     * An array of el_CY mobile (cell) phone number formats.
     *
     * @var array
     */
    protected static $mobileFormats = array(
        '9#######',
    );

    /**
     * Return a el_CY mobile phone number.
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
