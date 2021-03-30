<?php

namespace Cheremhovo1990\Faker\Provider\ja_JP;

class Company extends \Cheremhovo1990\Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}'
    );

    protected static $companyPrefix = array('株式会社', '有限会社');

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
