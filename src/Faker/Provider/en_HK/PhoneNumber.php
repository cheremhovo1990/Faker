<?php

namespace Cheremhovo1990\Faker\Provider\en_HK;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array('2#######', '3#######', '5#######', '6#######', '9#######');
    protected static $mobileFormats = array('5#######', '6#######', '9#######');
    protected static $landlineFormats = array('2#######', '3#######');
    protected static $faxFormats = array('7#######');

    /**
     * Return an en_HK mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return an en_HK landline number
     * @return string
     */
    public static function landlineNumber()
    {
        return static::numerify(static::randomElement(static::$landlineFormats));
    }

    /**
     * Return an en_HK fax number
     * @return string
     */
    public static function faxNumber()
    {
        return static::numerify(static::randomElement(static::$faxFormats));
    }
}
