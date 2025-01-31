<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_SG;

use Cheremhovo1990\Faker\Factory;
use Cheremhovo1990\Faker\Provider\en_SG\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    protected function setUp()
    {
        $faker = Factory::create('en_SG');
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testStreetNumber()
    {
        $this->assertRegExp('/^\d{2,3}$/', $this->faker->streetNumber());
    }

    public function testBlockNumber()
    {
        $this->assertRegExp('/^Blk\s*\d{2,3}[A-H]*$/i', $this->faker->blockNumber());
    }
}
