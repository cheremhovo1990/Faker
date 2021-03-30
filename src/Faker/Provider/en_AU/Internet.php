<?php

namespace Cheremhovo1990\Faker\Provider\en_AU;

class Internet extends \Cheremhovo1990\Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'gmail.com.au', 'yahoo.com.au', 'hotmail.com.au');
    protected static $tld = array('com', 'com.au', 'org', 'org.au', 'net', 'net.au', 'biz', 'info', 'edu', 'edu.au');
}
