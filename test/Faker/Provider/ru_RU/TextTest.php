<?php

namespace Cheremhovo1990\Faker\Test\Provider\ru_RU;

use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    private $textClass;

    protected function setUp()
    {
        $this->textClass = new \ReflectionClass('Cheremhovo1990\Faker\Provider\ru_RU\Text');
    }

    protected function getMethod($name) {
        $method = $this->textClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    function testItShouldAppendEndPunctToTheEndOfString()
    {
        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('На другой день Чичиков отправился на обед и вечер '))
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('На другой день Чичиков отправился на обед и вечер—'))
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('На другой день Чичиков отправился на обед и вечер,'))
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер!.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('На другой день Чичиков отправился на обед и вечер! '))
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('На другой день Чичиков отправился на обед и вечер; '))
        );

        $this->assertSame(
            'На другой день Чичиков отправился на обед и вечер.',
            $this->getMethod('appendEnd')->invokeArgs(null, array('На другой день Чичиков отправился на обед и вечер: '))
        );
    }
}
