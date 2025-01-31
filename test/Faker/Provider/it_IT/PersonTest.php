<?php

namespace Cheremhovo1990\Faker\Test\Provider\it_IT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\it_IT\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIfTaxIdCanReturnData()
    {
        $taxId = $this->faker->taxId();
        $this->assertRegExp('/^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$/', $taxId);
    }

}
