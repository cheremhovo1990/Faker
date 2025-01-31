<?php

namespace Cheremhovo1990\Faker\Test\Provider\es_PE;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\es_PE\Person;
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
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI()
    {
        $dni = $this->faker->dni;
        $this->assertRegExp('/\A[0-9]{8}\Z/', $dni);
    }
}
