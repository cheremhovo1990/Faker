<?php

namespace Cheremhovo1990\Faker\Provider\de_CH;

class Internet extends \Cheremhovo1990\Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'gmail.com',
        'hotmail.com',
        'yahoo.com',
        'googlemail.com',
        'gmx.ch',
        'bluewin.ch',
        'swissonline.ch'
    );
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'li', 'ch', 'ch');
}
