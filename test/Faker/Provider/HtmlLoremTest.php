<?php

namespace Cheremhovo1990\Faker\Test\Provider;

use Cheremhovo1990\Faker\Generator;
use Cheremhovo1990\Faker\Provider\HtmlLorem;
use PHPUnit\Framework\TestCase;

final class HtmlLoremTest extends TestCase
{

    public function testProvider()
    {
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHtml(6, 10);
        $this->assertStringStartsWith("<html>", $node);
        $this->assertStringEndsWith("</html>\n", $node);
    }

    public function testRandomHtmlReturnsValidHTMLString()
    {
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHtml(6, 10);
        $dom = new \DOMDocument();
        $error = $dom->loadHTML($node);
        $this->assertTrue($error);
    }

}
