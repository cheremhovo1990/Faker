<?php

namespace Cheremhovo1990\Faker\Test\Provider\es_ES;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\es_ES\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testMobileNumber()
    {
        $this->assertNotEquals('', $this->faker->mobileNumber());
    }

    public function testTollFreeNumber()
    {
        $this->assertEquals(11, strlen($this->faker->tollFreeNumber()));
    }
}
