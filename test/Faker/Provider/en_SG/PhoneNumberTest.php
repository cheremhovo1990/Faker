<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_SG;

use Cheremhovo1990\Faker\Factory;
use Cheremhovo1990\Faker\Provider\en_SG\PhoneNumber;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PhoneNumberTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create('en_SG');
        $this->faker->seed(1);
        $this->faker->addProvider(new PhoneNumber($this->faker));
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // x means 0 to 9
    // y means 0 to 8 only
    public function testMobilePhoneNumberStartWith9Returns9yxxxxxx()
    {
        $startsWith9 = false;
        while (!$startsWith9) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith9 = preg_match('/^(\+65|65)?\s*9/', $mobileNumber);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(\+65|65)?\s*9\s*[0-8]\d{2}\s*\d{4}$/', $mobileNumber);
        } else {
            $this->assertMatchesRegularExpression('/^(\+65|65)?\s*9\s*[0-8]\d{2}\s*\d{4}$/', $mobileNumber);
        }

    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // x means 0 to 9
    // z means 1 to 8 only
    public function testMobilePhoneNumberStartWith8Returns8zxxxxxx()
    {
        $startsWith8 = false;
        while (!$startsWith8) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith8 = preg_match('/^(\+65|65)?\s*8/', $mobileNumber);
        }
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(\+65|65)?\s*8\s*[1-8]\d{2}\s*\d{4}$/', $mobileNumber);
        } else {
            $this->assertMatchesRegularExpression('/^(\+65|65)?\s*8\s*[1-8]\d{2}\s*\d{4}$/', $mobileNumber);
        }

    }
}
