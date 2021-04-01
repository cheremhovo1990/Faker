<?php

namespace Cheremhovo1990\Faker\Test\Provider\de_AT;


use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\de_AT\Address;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class AddressTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();

        $faker->addProvider(new Address($faker));

        $this->faker = $faker;
    }

    /**
     * @see https://en.wikipedia.org/wiki/List_of_postal_codes_in_Austria
     */
    public function testPostcodeReturnsPostcodeThatMatchesAustrianFormat()
    {
        $postcode = $this->faker->postcode;

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[1-9]\d{3}$/', $postcode);
        } else {
            $this->assertMatchesRegularExpression('/^[1-9]\d{3}$/', $postcode);
        }

    }
}
