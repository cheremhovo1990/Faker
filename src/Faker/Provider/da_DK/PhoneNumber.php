<?php

namespace Cheremhovo1990\Faker\Provider\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    /**
     * @var array Danish phonenumber formats.
     */
    protected static $formats = array(
        '+45 ## ## ## ##',
        '+45 #### ####',
        '+45########',
        '## ## ## ##',
        '#### ####',
        '########',
    );
}
