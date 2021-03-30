<?php


namespace Cheremhovo1990\Faker\Test\Provider\tr_TR;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\tr_TR\Payment;
use PHPUnit\Framework\TestCase;

final class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testBankAccountNumber()
    {
        $accNo = $this->faker->bankAccountNumber;
        $this->assertEquals(substr($accNo, 0, 2), 'TR');
        $this->assertEquals(26, strlen($accNo));
    }
}
