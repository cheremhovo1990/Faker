<?php

namespace Cheremhovo1990\Faker\Test\Provider\fr_FR;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\fr_FR\PhoneNumber;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PhoneNumberTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testMobileNumber()
    {
        $mobileNumber = $this->faker->mobileNumber();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(\+33 |\+33 \(0\)|0)(6|7)(?:(\s{1})?\d{2}){4}$/', $mobileNumber);
        } else {
            $this->assertMatchesRegularExpression('/^(\+33 |\+33 \(0\)|0)(6|7)(?:(\s{1})?\d{2}){4}$/', $mobileNumber);
        }

    }

    public function testMobileNumber07Format()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^([3-9]{1})\d(\d{2}){3}$/', $mobileNumberFormat);
        } else {
            $this->assertMatchesRegularExpression('/^([3-9]{1})\d(\d{2}){3}$/', $mobileNumberFormat);
        }

    }

    public function testMobileNumber07WithSeparatorFormat()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07WithSeparator();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^([3-9]{1})\d( \d{2}){3}$/', $mobileNumberFormat);
        } else {
            $this->assertMatchesRegularExpression('/^([3-9]{1})\d( \d{2}){3}$/', $mobileNumberFormat);
        }

    }

    public function testServiceNumber()
    {
        $serviceNumber = $this->faker->serviceNumber();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(\+33 |\+33 \(0\)|0)8(?:(\s{1})?\d{2}){4}$/', $serviceNumber);
        } else {
            $this->assertMatchesRegularExpression('/^(\+33 |\+33 \(0\)|0)8(?:(\s{1})?\d{2}){4}$/', $serviceNumber);
        }

    }

    public function testServiceNumberFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^((0|1|2)\d{1}|9[^46])\d{6}$/', $serviceNumberFormat);
        } else {
            $this->assertMatchesRegularExpression('/^((0|1|2)\d{1}|9[^46])\d{6}$/', $serviceNumberFormat);
        }

    }

    public function testServiceNumberWithSeparatorFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08WithSeparator();
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^((0|1|2)\d{1}|9[^46])( \d{2}){3}$/', $serviceNumberFormat);
        } else {
            $this->assertMatchesRegularExpression('/^((0|1|2)\d{1}|9[^46])( \d{2}){3}$/', $serviceNumberFormat);
        }
    }
}
