<?php

namespace Cheremhovo1990\Faker\Provider\fr_BE;

class Company extends \Cheremhovo1990\Faker\Provider\fr_FR\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('ASBL', 'SCS', 'SNC', 'SPRL', 'Associations', 'Entreprise individuelle', 'GEIE', 'GIE', 'SA', 'SCA', 'SCRI', 'SCRL');
}
