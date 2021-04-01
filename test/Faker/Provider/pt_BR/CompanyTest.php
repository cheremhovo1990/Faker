<?php

namespace Cheremhovo1990\Faker\Test\Provider\pt_BR;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\pt_BR\Company;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

final class CompanyTest extends TestCase
{

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testCnpjFormatIsValid()
    {
        $cnpj = $this->faker->cnpj(false);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/\d{8}\d{4}\d{2}/', $cnpj);
        } else {
            $this->assertMatchesRegularExpression('/\d{8}\d{4}\d{2}/', $cnpj);
        }

        $cnpj = $this->faker->cnpj(true);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}/', $cnpj);
        } else {
            $this->assertMatchesRegularExpression('/\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}/', $cnpj);
        }

    }
}
