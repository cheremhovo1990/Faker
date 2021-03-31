<?php

namespace Cheremhovo1990\Faker\Test\Provider\zh_TW;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\zh_TW\Company;
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
        $this->faker = $faker;
    }

    public function testVAT()
    {
        $this->assertEquals(8, floor(log10($this->faker->VAT) + 1));
    }
}
