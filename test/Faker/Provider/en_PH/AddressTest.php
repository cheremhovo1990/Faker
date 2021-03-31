<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_PH;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_PH\Address;
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

    public function testProvince()
    {
      $province = $this->faker->province();
      $this->assertNotEmpty($province);
      $this->assertInternalType('string', $province);
    }

    public function testCity()
    {
      $city = $this->faker->city();
      $this->assertNotEmpty($city);
      $this->assertInternalType('string', $city);
    }

    public function testMunicipality()
    {
      $municipality = $this->faker->municipality();
      $this->assertNotEmpty($municipality);
      $this->assertInternalType('string', $municipality);
    }

    public function testBarangay()
    {
      $barangay = $this->faker->barangay();
      $this->assertInternalType('string', $barangay);
    }
}
