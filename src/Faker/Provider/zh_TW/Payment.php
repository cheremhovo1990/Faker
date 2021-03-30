<?php

namespace Cheremhovo1990\Faker\Provider\zh_TW;

use Cheremhovo1990\Faker\Factory;

class Payment extends \Cheremhovo1990\Faker\Provider\Payment
{
    public function creditCardDetails($valid = true)
    {
        return Factory::create('en_US')->creditCardDetails($valid);
    }
}
