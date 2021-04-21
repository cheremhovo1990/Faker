<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_SG;

use Cheremhovo1990\Faker\Factory;
use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_SG\Address;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @property Generator $faker
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class AddressTest extends TestCase
{
    protected function setUp(): void
    {
        $faker = Factory::create('en_SG');
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testStreetNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^\d{2,3}$/', $this->faker->streetNumber());
        } else {
            $this->assertMatchesRegularExpression('/^\d{2,3}$/', $this->faker->streetNumber());
        }

    }

    public function testBlockNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^Blk\s*\d{2,3}[A-H]*$/i', $this->faker->blockNumber());
        } else {
            $this->assertMatchesRegularExpression('/^Blk\s*\d{2,3}[A-H]*$/i', $this->faker->blockNumber());
        }

    }
}
