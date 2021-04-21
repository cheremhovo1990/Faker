<?php

namespace Cheremhovo1990\Faker\Test\Provider\pt_PT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\pt_PT\PhoneNumber;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

final class PhoneNumberTest extends TestCase
{
    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutPrefix()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(9[1,2,3,6][0-9]{7})|(2[0-9]{8})|(\+351 [2][0-9]{8})|(\+351 9[1,2,3,6][0-9]{7})/', $this->faker->phoneNumber());
        } else {
            $this->assertMatchesRegularExpression('/^(9[1,2,3,6][0-9]{7})|(2[0-9]{8})|(\+351 [2][0-9]{8})|(\+351 9[1,2,3,6][0-9]{7})/', $this->faker->phoneNumber());
        }
    }
    public function testMobileNumberReturnsMobileNumberWithOrWithoutPrefix()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(9[1,2,3,6][0-9]{7})/', $this->faker->mobileNumber());
        } else {
            $this->assertMatchesRegularExpression('/^(9[1,2,3,6][0-9]{7})/', $this->faker->mobileNumber());
        }

    }
}
