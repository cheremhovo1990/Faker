<?php

namespace Cheremhovo1990\Faker\Test\Provider\es_PE;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\es_PE\Person;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

/**
 * @method assertMatchesRegularExpression($pattern, $string)
 */
final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI()
    {
        $dni = $this->faker->dni;
        if (version_compare(Version::id(), '8.0', '<=')) {
            $this->assertRegExp('/\A[0-9]{8}\Z/', $dni);
        } else {
            $this->assertMatchesRegularExpression('/\A[0-9]{8}\Z/', $dni);
        }
    }
}
