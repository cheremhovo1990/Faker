<?php

namespace Cheremhovo1990\Faker\Test\Provider\pt_PT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\pt_PT\Address;
use Cheremhovo1990\Faker\Provider\pt_PT\Person;
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

    public function testPostCodeIsValid()
    {
        $main = '[1-9]{1}[0-9]{2}[0,1,4,5,9]{1}';
        $pattern = "/^($main)|($main-[0-9]{3})+$/";
        $postcode = $this->faker->postcode();
        $this->assertSame(preg_match($pattern, $postcode), 1, $postcode);
    }

    public function testAddressIsSingleLine()
    {
        $this->faker->addProvider(new Person($this->faker));

        $address = $this->faker->address();
        $this->assertFalse(strstr($address, "\n"));
    }
}
