<?php

namespace Cheremhovo1990\Faker\Test\Provider\nl_NL;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\nl_NL\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testGenerateValidIdNumber()
    {
        $idNumber = $this->faker->idNumber();
        $this->assertEquals(9, strlen($idNumber));


        $sum = -1 * $idNumber % 10;
        for ($multiplier = 2; $idNumber > 0; $multiplier++) {
            $val = ($idNumber /= 10) % 10;
            $sum += $multiplier * $val;
        }
        $this->assertTrue($sum != 0 && $sum % 11 == 0);
    }
}
