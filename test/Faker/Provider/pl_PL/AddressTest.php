<?php

namespace Cheremhovo1990\Faker\Test\Provider\pl_PL;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\pl_PL\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
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
        $this->assertInternalType('string', $state);
        $this->assertRegExp('/[a-z]+/', $state);
    }
}
