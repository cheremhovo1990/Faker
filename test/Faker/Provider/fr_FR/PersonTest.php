<?php

namespace Cheremhovo1990\Faker\Test\Provider\fr_FR;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\fr_FR\Person;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PersonTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNIRReturnsTheRightGender()
    {
		$nir = $this->faker->nir(\Cheremhovo1990\Faker\Provider\Person::GENDER_MALE);
		$this->assertStringStartsWith('1', $nir);
    }

	public function testNIRReturnsTheRightPattern()
    {
		$nir = $this->faker->nir;
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp("/^[12]\d{5}[0-9A-B]\d{8}$/", $nir);
        } else {
            $this->assertMatchesRegularExpression("/^[12]\d{5}[0-9A-B]\d{8}$/", $nir);
        }

	}

	public function testNIRFormattedReturnsTheRightPattern()
    {
		$nir = $this->faker->nir(null, true);
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp("/^[12]\s\d{2}\s\d{2}\s\d{1}[0-9A-B]\s\d{3}\s\d{3}\s\d{2}$/", $nir);
        } else {
            $this->assertMatchesRegularExpression("/^[12]\s\d{2}\s\d{2}\s\d{1}[0-9A-B]\s\d{3}\s\d{3}\s\d{2}$/", $nir);
        }

	}
}
