<?php

namespace Cheremhovo1990\Faker\Provider\el_GR;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Greece
     */
    protected static $formats = array(
        // International formats
        '+30 2# ########',
        '+30 2## #######',
        '+30 2### ######',
        '+302#########',

        '+3069########',
        '+30 69 ########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard format
        '2#########',
        '2## #######',
        '2### ######',

        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
    );

    protected static $mobileFormats = array(
        // International formats
        '+3069########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard formats
        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
    );

    public static function mobilePhoneNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    protected static $tollFreeFormats = array(
        // International formats
        '+30 800#######',
        '+30 800 #######',
        '+30 800 ## #####',
        '+30 800 ### ####',

        // Standard formats
        '800#######',
        '800 #######',
        '800 ## #####',
        '800 ### ####',
    );

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
