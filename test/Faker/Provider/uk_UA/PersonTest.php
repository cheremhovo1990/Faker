<?php

namespace Cheremhovo1990\Faker\Test\Provider\uk_UA;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\uk_UA\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Максим', $faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Людмила', $faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Миколайович', $faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Миколаївна', $faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Броваренко', $faker->lastName());
    }


}
