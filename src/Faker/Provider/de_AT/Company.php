<?php

namespace Cheremhovo1990\Faker\Provider\de_AT;

class Company extends \Cheremhovo1990\Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('AG', 'EWIV', 'Ges.m.b.H.', 'GmbH', 'KEG', 'KG', 'OEG', 'OG', 'OHG', 'SE');
}
