<?php

namespace Cheremhovo1990\Faker\Test\Provider\pt_PT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\pt_PT\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutPrefix()
    {
        $this->assertRegExp('/^(9[1,2,3,6][0-9]{7})|(2[0-9]{8})|(\+351 [2][0-9]{8})|(\+351 9[1,2,3,6][0-9]{7})/', $this->faker->phoneNumber());
    }
    public function testMobileNumberReturnsMobileNumberWithOrWithoutPrefix()
    {
        $this->assertRegExp('/^(9[1,2,3,6][0-9]{7})/', $this->faker->mobileNumber());
    }
}
