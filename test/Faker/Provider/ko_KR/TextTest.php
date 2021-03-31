<?php

namespace Cheremhovo1990\Faker\Test\Provider\ko_KR;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    private $textClass;

    protected function setUp()
    {
        $this->textClass = new \ReflectionClass( 'Cheremhovo1990\Faker\Provider\el_GR\Text');
    }

    protected function getMethod($name) {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('최석(崔晳)으로부터 최후의 편지가 '))
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('최석(崔晳)으로부터 최후의 편지가—'))
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('최석(崔晳)으로부터 최후의 편지가,'))
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가!.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('최석(崔晳)으로부터 최후의 편지가! '))
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('최석(崔晳)으로부터 최후의 편지가: '))
        );

        $this->assertSame(
            '최석(崔晳)으로부터 최후의 편지가.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('최석(崔晳)으로부터 최후의 편지가; '))
        );
    }
}
