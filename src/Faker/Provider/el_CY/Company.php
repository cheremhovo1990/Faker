<?php

namespace Cheremhovo1990\Faker\Provider\el_CY;

class Company extends \Cheremhovo1990\Faker\Provider\Company
{
    protected static $companySuffix = array(
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    );

    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    );
}
