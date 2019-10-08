<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function setUp(): void
    {
        $this->object = new Second;
    }

    /**
     * @test
     */
    public function helloName(): void
    {
        $this->assertSame("Hello Karthik", $this->object->helloName("Karthik"));
    }

    /**
     * @test
     */
    public function helloWorld(): void
    {
        $this->assertSame("Hello World", $this->object->helloWorld());
    }
}