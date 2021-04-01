<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_IN;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_IN\Address;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
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

  public function testCity()
  {
    $city = $this->faker->city();
    $this->assertNotEmpty($city);
    $this->assertIsString($city);
    if (version_compare(Version::id(), '8.0', '<=')) {
      $this->assertRegExp('/[A-Z][a-z]+/', $city);
    } else {
      $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $city);
    }

  }

  public function testCountry()
  {
    $country = $this->faker->country();
    $this->assertNotEmpty($country);
    $this->assertIsString($country);
    if (version_compare(Version::id(), '8.0', '<=')) {
      $this->assertRegExp('/[A-Z][a-z]+/', $country);
    } else {
      $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $country);
    }

  }

  public function testLocalityName()
  {
    $localityName = $this->faker->localityName();
    $this->assertNotEmpty($localityName);
    $this->assertIsString($localityName);
    if (version_compare(Version::id(), '8.0', '<=')) {
      $this->assertRegExp('/[A-Z][a-z]+/', $localityName);
    } else {
      $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $localityName);
    }

  }

  public function testAreaSuffix()
  {
    $areaSuffix = $this->faker->areaSuffix();
    $this->assertNotEmpty($areaSuffix);
    $this->assertIsString($areaSuffix);
    if (version_compare(Version::id(), '8.0', '<=')) {
      $this->assertRegExp('/[A-Z][a-z]+/', $areaSuffix);
    } else {
      $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $areaSuffix);
    }
  }
}

?>
