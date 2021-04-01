<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_AU;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_AU\Address;
use PHPUnit\Framework\TestCase;

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

  public function testCityPrefix()
  {
    $cityPrefix = $this->faker->cityPrefix();
    $this->assertNotEmpty($cityPrefix);
    $this->assertIsString($cityPrefix);
    $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $cityPrefix);
  }

  public function testStreetSuffix()
  {
    $streetSuffix = $this->faker->streetSuffix();
    $this->assertNotEmpty($streetSuffix);
    $this->assertIsString($streetSuffix);
    $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $streetSuffix);
  }

  public function testState()
  {
    $state = $this->faker->state();
    $this->assertNotEmpty($state);
    $this->assertIsString($state);
    $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $state);
  }
}

?>
