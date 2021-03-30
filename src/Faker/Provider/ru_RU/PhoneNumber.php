<?php

namespace Cheremhovo1990\Faker\Provider\ru_RU;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '(812) ###-##-##',
        '(495) ###-####',
        '+7 (922) ###-####',
        '(35222) ##-####',
        '8-800-###-####',
    );
}
