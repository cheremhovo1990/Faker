<?php

namespace Cheremhovo1990\Faker\Test\Provider\nl_NL;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\nl_NL\Company;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

final class CompanyTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testGenerateValidVatNumber()
    {
        $vatNo = $this->faker->vat();

        $this->assertEquals(14, strlen($vatNo));
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}$/', $vatNo);
        } else {
            $this->assertMatchesRegularExpression('/^NL[0-9]{9}B[0-9]{2}$/', $vatNo);
        }
    }

    public function testGenerateValidBtwNumberAlias()
    {
        $btwNo = $this->faker->btw();

        $this->assertEquals(14, strlen($btwNo));
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}$/', $btwNo);
        } else {
            $this->assertMatchesRegularExpression('/^NL[0-9]{9}B[0-9]{2}$/', $btwNo);
        }

    }
}
