<?php

namespace Cheremhovo1990\Faker\Test\Provider;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testLatitude()
    {
        $latitude = $this->faker->latitude();
        $this->assertInternalType('float', $latitude);
        $this->assertGreaterThanOrEqual(-90, $latitude);
        $this->assertLessThanOrEqual(90, $latitude);
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertInternalType('float', $longitude);
        $this->assertGreaterThanOrEqual(-180, $longitude);
        $this->assertLessThanOrEqual(180, $longitude);
    }

    public function testCoordinate()
    {
        $coordinate = $this->faker->localCoordinates();
        $this->assertInternalType('array', $coordinate);
        $this->assertInternalType('float', $coordinate['latitude']);
        $this->assertGreaterThanOrEqual(-90, $coordinate['latitude']);
        $this->assertLessThanOrEqual(90, $coordinate['latitude']);
        $this->assertInternalType('float', $coordinate['longitude']);
        $this->assertGreaterThanOrEqual(-180, $coordinate['longitude']);
        $this->assertLessThanOrEqual(180, $coordinate['longitude']);
    }
}
