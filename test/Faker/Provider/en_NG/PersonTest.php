<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_NG;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_NG\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
     /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testPersonNameIsAValidString()
    {
        $name = $this->faker->name;

        $this->assertNotEmpty($name);
        $this->assertIsString($name);
    }
}
