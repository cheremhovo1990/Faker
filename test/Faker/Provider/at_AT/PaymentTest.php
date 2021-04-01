<?php

namespace Cheremhovo1990\Faker\Test\Provider\at_AT;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\at_AT\Payment;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PaymentTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVatIsValid()
    {
        $vat = $this->faker->vat();
        $unspacedVat = $this->faker->vat(false);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(AT U\d{8})$/', $vat);
        } else {
            $this->assertMatchesRegularExpression('/^(AT U\d{8})$/', $vat);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(ATU\d{8})$/', $unspacedVat);
        } else {
            $this->assertMatchesRegularExpression('/^(ATU\d{8})$/', $unspacedVat);
        }

    }
}
