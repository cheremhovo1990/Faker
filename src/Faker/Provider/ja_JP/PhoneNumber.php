<?php

namespace Cheremhovo1990\Faker\Provider\ja_JP;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    /**
     * @link http://www.soumu.go.jp/main_sosiki/joho_tsusin/top/tel_number/number_shitei.html#kotei-denwa
     */
    protected static $formats = array(
        '080-####-####',
        '090-####-####',
        '0#-####-####',
        '0####-#-####',
        '0###-##-####',
        '0##-###-####',
        '0##0-###-###',
    );
}
