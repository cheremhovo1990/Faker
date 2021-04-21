<?php

namespace Cheremhovo1990\Faker\Test\Provider;

use Cheremhovo1990\Faker\Factory;
use Faker;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * Class ProviderOverrideTest
 *
 * @method assertMatchesRegularExpression($pattern, $string)
 *
 * @package Cheremhovo1990\Faker\Test\Provider
 *
 * This class tests a large portion of all locale specific providers. It does not test the entire stack, because each
 * locale specific provider (can) has specific implementations. The goal of this test is to test the common denominator
 * and to try to catch possible invalid multi-byte sequences.
 */
final class ProviderOverrideTest extends TestCase
{
    /**
     * Constants with regular expression patterns for testing the output.
     *
     * Regular expressions are sensitive for malformed strings (e.g.: strings with incorrect encodings) so by using
     * PCRE for the tests, even though they seem fairly pointless, we test for incorrect encodings also.
     */
    const TEST_STRING_REGEX = '/.+/u';

    /**
     * Slightly more specific for e-mail, the point isn't to properly validate e-mails.
     */
    const TEST_EMAIL_REGEX = '/^(.+)@(.+)$/ui';

    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testAddress($locale = null)
    {
        $faker = Factory::create($locale);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->city);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->city);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->postcode);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->postcode);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->address);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->address);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->country);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->country);
        }

    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testCompany($locale = null)
    {
        $faker = Factory::create($locale);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->company);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->company);
        }

    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testDateTime($locale = null)
    {
        $faker = Factory::create($locale);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->century);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->century);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->timezone);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->timezone);
        }

    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testInternet($locale = null)
    {
        if ($locale && $locale !== 'en_US' && !class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $faker = Factory::create($locale);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->userName);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->userName);
        }


        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->email);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_EMAIL_REGEX, $faker->email);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->safeEmail);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_EMAIL_REGEX, $faker->safeEmail);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->freeEmail);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_EMAIL_REGEX, $faker->freeEmail);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->companyEmail);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_EMAIL_REGEX, $faker->companyEmail);
        }

    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testPerson($locale = null)
    {
        $faker = Factory::create($locale);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->name);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->name);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->title);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->title);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->firstName);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->firstName);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->lastName);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->lastName);
        }

    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testPhoneNumber($locale = null)
    {
        $faker = Factory::create($locale);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->phoneNumber);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->phoneNumber);
        }

    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testUserAgent($locale = null)
    {
        $faker = Factory::create($locale);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->userAgent);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->userAgent);
        }

    }


    /**
     * @dataProvider localeDataProvider
     *
     * @param null   $locale
     * @param string $locale
     */
    public function testUuid($locale = null)
    {
        $faker = Factory::create($locale);

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp(static::TEST_STRING_REGEX, $faker->uuid);
        } else {
            $this->assertMatchesRegularExpression(static::TEST_STRING_REGEX, $faker->uuid);
        }

    }


    /**
     * @return array
     */
    public function localeDataProvider()
    {
        $locales = $this->getAllLocales();
        $data = array();

        foreach ($locales as $locale) {
            $data[] = array(
                $locale
            );
        }

        return $data;
    }


    /**
     * Returns all locales as array values
     *
     * @return array
     */
    private function getAllLocales()
    {
        static $locales = array();

        if ( ! empty($locales)) {
            return $locales;
        }

        // Finding all PHP files in the xx_XX directories
        $providerDir = __DIR__ .'/../../../src/Faker/Provider';
        foreach (glob($providerDir .'/*_*/*.php') as $file) {
            $localisation = basename(dirname($file));

            if (isset($locales[ $localisation ])) {
                continue;
            }

            $locales[ $localisation ] = $localisation;
        }

        return $locales;
    }
}
