<?php

namespace Cheremhovo1990\Faker\Test\Provider\fr_FR;

use Cheremhovo1990\Faker\Calculator\Luhn;
use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\fr_FR\Payment;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PaymentTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testFormattedVat()
    {
        $vat = $this->faker->vat(true);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp("/^FR\s\w{2}\s\d{3}\s\d{3}\s\d{3}$/", $vat);
        } else {
            $this->assertMatchesRegularExpression("/^FR\s\w{2}\s\d{3}\s\d{3}\s\d{3}$/", $vat);
        }


        $vat = str_replace(' ', '', $vat);
        $siren = substr($vat, 4, 12);
        $this->assertTrue(Luhn::isValid($siren));

        $key = (int) substr($siren, 2, 2);
        if ($key === 0) {
            $this->assertEqual($key, (12 + 3 * ($siren % 97)) % 97);            
        }
    }

    public function testUnformattedVat()
    {
        $vat = $this->faker->vat(false);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp("/^FR\w{2}\d{9}$/", $vat);
        } else {
            $this->assertMatchesRegularExpression("/^FR\w{2}\d{9}$/", $vat);
        }


        $siren = substr($vat, 4, 12);
        $this->assertTrue(Luhn::isValid($siren));

        $key = (int) substr($siren, 2, 2);
        if ($key === 0) {
            $this->assertEqual($key, (12 + 3 * ($siren % 97)) % 97);            
        }
    }
}