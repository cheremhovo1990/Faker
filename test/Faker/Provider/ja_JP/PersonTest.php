<?php

namespace Cheremhovo1990\Faker\Test\Provider\ja_JP;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\ja_JP\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testKanaNameMaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('アオタ ミノル', $faker->kanaName('male'));
    }

    public function testKanaNameFemaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('アオタ ミキ', $faker->kanaName('female'));
    }

    public function testFirstKanaNameMaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ヒデキ', $faker->firstKanaName('male'));
    }

    public function testFirstKanaNameFemaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('マアヤ', $faker->firstKanaName('female'));
    }

    public function testLastKanaNameReturnsNakajima()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ナカジマ', $faker->lastKanaName);
    }
}
