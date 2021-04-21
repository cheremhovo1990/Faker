<?php

namespace Cheremhovo1990\Faker\Test\Provider\ja_JP;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\ja_JP\PhoneNumber;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));

        for ($i = 0; $i < 10; $i++) {
            $phoneNumber = $faker->phoneNumber;
            $this->assertNotEmpty($phoneNumber);
            if (version_compare(Version::id(), '8.0', '<=')) {
                $this->assertRegExp('/^0\d{1,4}-\d{1,4}-\d{3,4}$/', $phoneNumber);
            } else {
                $this->assertMatchesRegularExpression('/^0\d{1,4}-\d{1,4}-\d{3,4}$/', $phoneNumber);
            }
        }
    }
}
