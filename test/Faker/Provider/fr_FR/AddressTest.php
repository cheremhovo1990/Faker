<?php

namespace Cheremhovo1990\Faker\Test\Provider\fr_FR;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\fr_FR\Address;
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

  public function testSecondaryAddress()
  {
    $secondaryAdress = $this->faker->secondaryAddress();
    $this->assertNotEmpty($secondaryAdress);
    $this->assertIsString($secondaryAdress);
  }
}
