<?php

namespace Cheremhovo1990\Faker\Provider\he_IL;

class Company extends \Cheremhovo1990\Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} את {{lastName}} {{companySuffix}}',
        '{{lastName}} ו{{lastName}}'
    );

    protected static $companySuffix = array('בע"מ', 'ובניו', 'סוכנויות', 'משווקים');
}
