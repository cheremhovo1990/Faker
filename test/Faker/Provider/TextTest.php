<?php
namespace Cheremhovo1990\Faker\Test\Provider;

use Cheremhovo1990\Faker\Provider\en_US\Text;
use Cheremhovo1990\Faker\Generator;
use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    /**
     * @var Generator
     */
    private $generator;

    /**
     * @before
     */
    public function buildGenerator()
    {
        $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);

        $this->generator = $generator;
    }

    /**
     * @testWith [10]
     *           [20]
     *           [50]
     *           [70]
     *           [90]
     *           [120]
     *           [150]
     *           [200]
     *           [500]
     */
    public function testTextMaxLength($length)
    {
        $text = $this->generator->realText($length);
        $this->assertLessThan($length, strlen($text));
    }

    public function testTextMaxIndex()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->generator->realText(200, 11);

        $this->fail('The index should be less than or equal to 5.');
    }

    public function testTextMinIndex()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->generator->realText(200, 0);

        $this->fail('The index should be greater than or equal to 1.');
    }

    public function testTextMinLength()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->generator->realText(9);

        $this->fail('The text should be at least 10 characters.');
    }
}
