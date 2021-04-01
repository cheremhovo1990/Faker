<?php

namespace Cheremhovo1990\Faker\Test\Provider\it_CH;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\it_CH\Address;
use Cheremhovo1990\Faker\Provider\it_CH\Person;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{

    /**
     * @var \Cheremhovo1990\Faker\Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function canton ()
    {
        $canton = $this->faker->canton();
        $this->assertIsArray($canton);
        $this->assertCount(1, $canton);

        foreach ($canton as $cantonShort => $cantonName){
            $this->assertIsString($cantonShort);
            $this->assertEquals(2, strlen($cantonShort));
            $this->assertIsString($cantonName);
            $this->assertGreaterThan(2, strlen($cantonName));
        }
    }

    /**
     * @test
     */
    public function cantonName ()
    {
        $cantonName = $this->faker->cantonName();
        $this->assertIsString($cantonName);
        $this->assertGreaterThan(2, strlen($cantonName));
    }

    /**
     * @test
     */
    public function cantonShort ()
    {
        $cantonShort = $this->faker->cantonShort();
        $this->assertIsString($cantonShort);
        $this->assertEquals(2, strlen($cantonShort));
    }

    /**
     * @test
     */
    public function address ()
    {
        $address = $this->faker->address();
        $this->assertIsString($address);
    }
}
