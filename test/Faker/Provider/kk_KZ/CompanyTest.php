<?php
namespace Cheremhovo1990\Faker\Test\Provider\kk_KZ;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\kk_KZ\Company;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->faker = new Generator();

        $this->faker->addProvider(new Company($this->faker));
    }

    public function testBusinessIdentificationNumberIsValid()
    {
        $registrationDate             = new \DateTime('now');
        $businessIdentificationNumber = $this->faker->businessIdentificationNumber($registrationDate);
        $registrationDateAsString     = $registrationDate->format('ym');

        $this->assertRegExp(
            "/^(" . $registrationDateAsString . ")([4-6]{1})([0-3]{1})(\\d{6})$/",
            $businessIdentificationNumber
        );
    }
}
