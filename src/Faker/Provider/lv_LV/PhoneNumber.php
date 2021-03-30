<?php

namespace Cheremhovo1990\Faker\Provider\lv_LV;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    /**
     * {@link} https://en.wikipedia.org/wiki/Telephone_numbers_in_Latvia
     **/
    protected static $formats = array(
        '########',
        '## ### ###',
        '+371 ########',
    );
}
