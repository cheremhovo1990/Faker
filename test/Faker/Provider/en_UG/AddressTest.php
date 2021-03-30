<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_UG;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_UG\Address;
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

  public function testCityName()
  {
    $city = $this->faker->cityName();
    $this->assertNotEmpty($city);
    $this->assertInternalType('string', $city);
  }

  public function testDistrict()
  {
    $district = $this->faker->district();
    $this->assertNotEmpty($district);
    $this->assertInternalType('string', $district);
  }

  public function testRegion()
  {
    $region = $this->faker->region();
    $this->assertNotEmpty($region);
    $this->assertInternaltype('string', $region);
  }
}
