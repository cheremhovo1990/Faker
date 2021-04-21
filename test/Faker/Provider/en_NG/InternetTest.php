<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_NG;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_NG\Person;
use Cheremhovo1990\Faker\Provider\en_NG\Internet;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $this->faker = $faker;
    }

    public function testEmailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
        $this->assertNotEmpty($email);
        $this->assertIsString($email);
    }
}
