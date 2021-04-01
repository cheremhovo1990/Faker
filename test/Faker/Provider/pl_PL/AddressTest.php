<?php

namespace Cheremhovo1990\Faker\Test\Provider\pl_PL;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\pl_PL\Address;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

final class AddressTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    /**
     * Test the validity of state
     */
    public function testState()
    {
        $state = $this->faker->state();
        $this->assertNotEmpty($state);
        $this->assertIsString($state);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/[a-z]+/', $state);
        } else {
            $this->assertMatchesRegularExpression('/[a-z]+/', $state);
        }
    }
}
