<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_ZA;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_ZA\Person;
use Cheremhovo1990\Faker\Provider\en_ZA\Internet;
use Cheremhovo1990\Faker\Provider\en_ZA\Company;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testEmailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}
