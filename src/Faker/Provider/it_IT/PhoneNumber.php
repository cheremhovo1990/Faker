<?php

namespace Cheremhovo1990\Faker\Provider\it_IT;

class PhoneNumber extends \Cheremhovo1990\Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+## ### ## ## ####',
        '+## ## #######',
        '+## ## ########',
        '+## ### #######',
        '+## ### ########',
        '+## #### #######',
        '+## #### ########',
        // According to http://it.wikipedia.org/wiki/Prefisso_telefonico#Elenco_degli_indicativi_in_Italia.2C_a_San_Marino_e_nel_Vaticano
        '0## ### ####',
        '+39 0## ### ###',
        '3## ### ###',
        '+39 3## ### ###'
    );
}
