<?php

namespace Cheremhovo1990\Faker\Provider\hu_HU;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+36-##-###-####',
        '+36#########',
        '+36(##)###-###',
        '06-##-###-####',
        '06(##)###-###',
    );
}
