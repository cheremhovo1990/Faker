<?php

namespace Cheremhovo1990\Faker\Provider\zh_TW;

use Cheremhovo1990\Faker\Factory;

class Internet extends \Cheremhovo1990\Faker\Provider\Internet
{
    public function userName()
    {
        return Factory::create('en_US')->userName();
    }

    public function domainWord()
    {
        return Factory::create('en_US')->domainWord();
    }
}
