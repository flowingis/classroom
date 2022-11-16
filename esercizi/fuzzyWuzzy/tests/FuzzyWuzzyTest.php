<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use PHPUnit\Framework\TestCase;

class FuzzyWuzzyTest extends TestCase
{
    public function testShouldReturnString(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Hello ', $fuzzyWuzzy->say(2));
    }
}