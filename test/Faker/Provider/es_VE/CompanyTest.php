<?php

namespace Cheremhovo1990\Faker\Test\Provider\es_VE;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\es_VE\Company;
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
        $faker->seed(1);
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    /**
     * national Id format validator
     */
    public function testNationalId()
    {
        $pattern = '/^[VJGECP]-?\d{8}-?\d$/';
        $rif = $this->faker->taxpayerIdentificationNumber;
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp($pattern, $rif);
        } else {
            $this->assertMatchesRegularExpression($pattern, $rif);
        }

        $rif = $this->faker->taxpayerIdentificationNumber('-');
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp($pattern, $rif);
        } else {
            $this->assertMatchesRegularExpression($pattern, $rif);
        }

    }


}
