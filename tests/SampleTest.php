<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testFirst()
    {
        $this->assertSame(1, 1**10);
    }
}
