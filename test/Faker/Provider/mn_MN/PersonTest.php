<?php

namespace Cheremhovo1990\Faker\Test\Provider\mn_MN;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\mn_MN\Person;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

final class PersonTest extends TestCase
{
    public function testName()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[А-Я]{1}\.[\w\W]+$/u', $faker->name);
        } else {
            $this->assertMatchesRegularExpression('/^[А-Я]{1}\.[\w\W]+$/u', $faker->name);
        }
    }

    public function testIdNumber()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(2);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[А-Я]{2}\d{8}$/u', $faker->idNumber);
        } else {
            $this->assertMatchesRegularExpression('/^[А-Я]{2}\d{8}$/u', $faker->idNumber);
        }

    }
}
