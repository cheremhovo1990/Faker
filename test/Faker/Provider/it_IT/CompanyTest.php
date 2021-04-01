<?php

namespace Cheremhovo1990\Faker\Test\Provider\it_IT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\it_IT\Company;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @property Generator $faker
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class CompanyTest extends TestCase
{
    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testIfTaxIdCanReturnData()
    {
        $vatId = $this->faker->vatId();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^IT[0-9]{11}$/', $vatId);
        } else {
            $this->assertMatchesRegularExpression('/^IT[0-9]{11}$/', $vatId);
        }

    }

}
