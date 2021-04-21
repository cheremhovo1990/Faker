<?php

namespace Cheremhovo1990\Faker\Test\Provider\it_CH;

use Cheremhovo1990\Faker\Calculator\Ean;
use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\it_CH\Person;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PersonTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testAvs13Number()
    {
        $avs = $this->faker->avs13;
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^756\.([0-9]{4})\.([0-9]{4})\.([0-9]{2})$/', $avs);
        } else {
            $this->assertMatchesRegularExpression('/^756\.([0-9]{4})\.([0-9]{4})\.([0-9]{2})$/', $avs);
        }


        $this->assertTrue(Ean::isValid(str_replace('.', '', $avs)));
    }
}