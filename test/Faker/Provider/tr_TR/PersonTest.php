<?php

namespace Cheremhovo1990\Faker\Test\Provider\tr_TR;

use Cheremhovo1990\Faker\Calculator\TCNo;
use Cheremhovo1990\Faker\Provider\tr_TR\Person;
use Cheremhovo1990\Faker\Generator;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testTCNo()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->tcNo;

            $this->assertEquals(11, strlen($number));
            $this->assertTrue(TCNo::isValid($number));
        }
    }
}
