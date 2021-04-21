<?php

namespace Cheremhovo1990\Faker\Test\Provider\it_CH;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\it_CH\PhoneNumber;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PhoneNumberTest extends TestCase
{

    /**
     * @var \Cheremhovo1990\Faker\Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^0\d{2} ?\d{3} ?\d{2} ?\d{2}|\+41 ?(\(0\))?\d{2} ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->phoneNumber());
        } else {
            $this->assertMatchesRegularExpression('/^0\d{2} ?\d{3} ?\d{2} ?\d{2}|\+41 ?(\(0\))?\d{2} ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->phoneNumber());
        }

    }

    public function testMobileNumber()
    {
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^07[56789] ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->mobileNumber());
        } else {
            $this->assertMatchesRegularExpression('/^07[56789] ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->mobileNumber());
        }

    }
}
