<?php

namespace Cheremhovo1990\Faker\Test\Provider\fr_CH;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\fr_CH\Person;
use Cheremhovo1990\Faker\Provider\fr_CH\Internet;
use Cheremhovo1990\Faker\Provider\fr_CH\Company;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{

    /**
     * @var Cheremhovo1990\Faker\Generator
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

    /**
     * @test
     */
    public function emailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}
