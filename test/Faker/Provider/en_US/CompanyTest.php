<?php

namespace Cheremhovo1990\Faker\Test\Provider\en_US;

use Cheremhovo1990\Faker\Provider\en_US\Company;
use Cheremhovo1990\Faker\Generator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class CompanyTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    /**
     * @link https://stackoverflow.com/questions/4242433/regex-for-ein-number-and-ssn-number-format-in-jquery/35471665#35471665
     */
    public function testEin()
    {
        $number = $this->faker->ein;

        // should be in the format ##-#######, with a valid prefix
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(0[1-6]||1[0-6]|2[0-7]|[35]\d|[468][0-8]|7[1-7]|9[0-58-9])-\d{7}$/', $number);
        } else {
            $this->assertMatchesRegularExpression('/^(0[1-6]||1[0-6]|2[0-7]|[35]\d|[468][0-8]|7[1-7]|9[0-58-9])-\d{7}$/', $number);
        }
    }
}
