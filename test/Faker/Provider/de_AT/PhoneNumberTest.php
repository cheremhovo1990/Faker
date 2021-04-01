<?php

namespace Cheremhovo1990\Faker\Test\Provider\de_AT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\de_AT\PhoneNumber;
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

    public function testPhoneNumberFormat()
    {
        $number = $this->faker->phoneNumber;
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^06\d{2} \d{7}|\+43 \d{4} \d{4}(-\d{2})?$/', $number);
        } else {
            $this->assertMatchesRegularExpression('/^06\d{2} \d{7}|\+43 \d{4} \d{4}(-\d{2})?$/', $number);
        }

    }
}
