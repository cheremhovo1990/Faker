<?php

namespace Cheremhovo1990\Faker\Test\Provider;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\Company;
use Cheremhovo1990\Faker\Provider\Lorem;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $faker->addProvider(new Lorem($faker));
        $this->faker = $faker;
    }

    public function testJobTitle()
    {
        $jobTitle = $this->faker->jobTitle();
        $pattern = '/^[A-Za-z]+$/';
        $this->assertRegExp($pattern, $jobTitle);
    }
}
