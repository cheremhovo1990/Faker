<?php

namespace Cheremhovo1990\Faker\Provider\lt_LT;

class Company extends \Cheremhovo1990\Faker\Provider\Company
{
    protected static $formats = array(
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
    );

    protected static $companySuffix = array('UAB', 'AB', 'IĮ', 'MB', 'VŠĮ');
}
