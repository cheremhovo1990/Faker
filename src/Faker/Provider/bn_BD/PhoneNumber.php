<?php

namespace Cheremhovo1990\Faker\Provider\bn_BD;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    public function phoneNumber()
    {
        $number = "+880";
        $number .= static::randomNumber(7);

        return Utils::getBanglaNumber($number);
    }
}
