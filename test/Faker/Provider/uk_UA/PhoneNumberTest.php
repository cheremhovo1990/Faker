<?php

namespace Cheremhovo1990\Faker\Test\Provider\uk_UA;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\uk_UA\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberFormat()
    {
        $pattern = "/((\+38)(((\(\d{3}\))\d{7}|(\(\d{4}\))\d{6})|(\d{8})))|0\d{9}/";
        $phoneNumber = $this->faker->phoneNumber;
        $this->assertSame(
            preg_match($pattern, $phoneNumber),
            1,
            'Phone number format ' . $phoneNumber . ' is wrong!'
        );

    }

}
