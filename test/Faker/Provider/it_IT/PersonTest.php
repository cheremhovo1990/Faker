<?php

namespace Cheremhovo1990\Faker\Test\Provider\it_IT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\it_IT\Person;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @property Generator $faker
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PersonTest extends TestCase
{
    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIfTaxIdCanReturnData()
    {
        $taxId = $this->faker->taxId();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$/', $taxId);
        } else {
            $this->assertMatchesRegularExpression('/^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$/', $taxId);
        }
    }

}
