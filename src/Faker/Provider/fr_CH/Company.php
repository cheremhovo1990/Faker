<?php

namespace Cheremhovo1990\Faker\Provider\fr_CH;

class Company extends \Cheremhovo1990\Faker\Provider\fr_FR\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('AG', 'Sàrl', 'SA', 'GmbH');
}
