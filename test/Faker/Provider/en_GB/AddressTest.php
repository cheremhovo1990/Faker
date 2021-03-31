<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_GB;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_GB\Address;
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
     *
     */
    public function testPostcode()
    {

        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);
        $this->assertInternalType('string', $postcode);
        $this->assertRegExp('@^(GIR ?0AA|[A-PR-UWYZ]([0-9]{1,2}|([A-HK-Y][0-9]([0-9ABEHMNPRV-Y])?)|[0-9][A-HJKPS-UW]) ?[0-9][ABD-HJLNP-UW-Z]{2})$@i', $postcode);

    }

}
