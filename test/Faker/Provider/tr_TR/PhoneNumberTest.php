<?php

namespace Cheremhovo1990\Faker\Test\Provider\tr_TR;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\tr_TR\PhoneNumber;
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

    public function testPhoneNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->phoneNumber;
            $baseNumber = preg_replace('/ *x.*$/', '', $number); // Remove possible extension
            $digits = array_values(array_filter(str_split($baseNumber), 'ctype_digit'));

            $this->assertGreaterThan(10, count($digits));
        }
    }
}
