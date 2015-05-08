<?php

namespace Toblerone\Assertion\PHPUnit;

use PHPUnit_Framework_Assert as PHPUnit;

trait Assert
{
    /**
     * @param $expected
     * @param $actual
     * @param string $message
     *
     * @see https://phpunit.de/manual/current/en/appendixes.assertions.html#appendixes.assertions.assertInstanceOf
     */
    public function assertInstanceOf($expected, $actual, $message = '')
    {
        PHPUnit::assertInstanceOf($expected, $actual, $message);
    }
}
