<?php

namespace Cheremhovo1990\Faker\Test\Provider\ro_RO;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\ro_RO\PhoneNumber;
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

    public function testPhoneNumberReturnsNormalPhoneNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^0(?:[23][13-7]|7\d)\d{7}$/', $this->faker->phoneNumber());
        } else {
            $this->assertMatchesRegularExpression('/^0(?:[23][13-7]|7\d)\d{7}$/', $this->faker->phoneNumber());
        }
    }

    public function testTollFreePhoneNumberReturnsTollFreePhoneNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^08(?:0[01267]|70)\d{6}$/', $this->faker->tollFreePhoneNumber());
        } else {
            $this->assertMatchesRegularExpression('/^08(?:0[01267]|70)\d{6}$/', $this->faker->tollFreePhoneNumber());
        }
    }

    public function testPremiumRatePhoneNumberReturnsPremiumRatePhoneNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^090[036]\d{6}$/', $this->faker->premiumRatePhoneNumber());
        } else {
            $this->assertMatchesRegularExpression('/^090[036]\d{6}$/', $this->faker->premiumRatePhoneNumber());
        }

    }
}
