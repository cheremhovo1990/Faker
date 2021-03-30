<?php

namespace Cheremhovo1990\Faker\Provider\en_CA;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\en_US\PhoneNumber
{
    protected static $formats = array(
        '%##-###-####',
        '%##.###.####',
        '%## ### ####',
        '(%##) ###-####',
        '1-%##-###-####',
        '1 (%##) ###-####',
        '+1 (%##) ###-####',
        '%##-###-#### x###',
        '(%##) ###-#### x###',
    );
}
