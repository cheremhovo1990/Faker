<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_NG;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_NG\PhoneNumber;
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

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutCountryCode()
    {
        $phoneNumber = $this->faker->phoneNumber();

        $this->assertNotEmpty($phoneNumber);
        $this->assertIsString($phoneNumber);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(0|(\+234))\s?[789][01]\d\s?(\d{3}\s?\d{4})/', $phoneNumber);
        } else {
            $this->assertMatchesRegularExpression('/^(0|(\+234))\s?[789][01]\d\s?(\d{3}\s?\d{4})/', $phoneNumber);
        }
    }
}
