<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_CA;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\en_CA\Address;
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
     * Test the validity of province
     */
    public function testProvince()
    {
        $province = $this->faker->province();
        $this->assertNotEmpty($province);
        $this->assertIsString($province);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/[A-Z][a-z]+/', $province);
        } else {
            $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $province);
        }

    }

    /**
     * Test the validity of province abbreviation
     */
    public function testProvinceAbbr()
    {
        $provinceAbbr = $this->faker->provinceAbbr();
        $this->assertNotEmpty($provinceAbbr);
        $this->assertIsString($provinceAbbr);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[A-Z]{2}$/', $provinceAbbr);
        } else {
            $this->assertMatchesRegularExpression('/^[A-Z]{2}$/', $provinceAbbr);
        }

    }

    /**
     * Test the validity of postcode letter
     */
    public function testPostcodeLetter()
    {
        $postcodeLetter = $this->faker->randomPostcodeLetter();
        $this->assertNotEmpty($postcodeLetter);
        $this->assertIsString($postcodeLetter);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[A-Z]{1}$/', $postcodeLetter);
        } else {
            $this->assertMatchesRegularExpression('/^[A-Z]{1}$/', $postcodeLetter);
        }

    }

    /**
     * Test the validity of Canadian postcode
     */
    public function testPostcode()
    {
        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);
        $this->assertIsString($postcode);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/', $postcode);
        } else {
            $this->assertMatchesRegularExpression('/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/', $postcode);
        }

    }
}

?>
