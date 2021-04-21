<?php

namespace Cheremhovo1990\Faker\Test\Provider\fr_BE;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\fr_BE\Payment;
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
            $this->assertRegExp('/^(BE 0\d{9})$/', $vat);
        } else {
            $this->assertMatchesRegularExpression('/^(BE 0\d{9})$/', $vat);
        }

        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/^(BE0\d{9})$/', $unspacedVat);
        } else {
            $this->assertMatchesRegularExpression('/^(BE0\d{9})$/', $unspacedVat);
        }

    }
}
