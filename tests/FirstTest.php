<?php
namespace App;

use \PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{

    public function setUp(): void
    {
        $this->first = new First;
    }

    /**
     * @test
     */
    public function assertIsTrue(): void
    {
        $this->assertTrue($this->first->isTrue());
    }

    /**
     * @test
     */
    public function assertIsFalse(): void
    {
        $this->assertTrue(!$this->first->isFalse());
    }

    /**
     * @test
     */
    public function sayHello(): void
    {
        $seconddouble = $this->createMock(Second::class);
        $seconddouble->method("helloWorld")->willReturn("Hello World");
        $this->expectOutputString("hello World".PHP_EOL);
        $this->first->sayHello($seconddouble);
    }

    /**
     * @test
     */
    public function sayBye(): void
    {
        $seconddouble = $this->createMock(Second::class);
        $seconddouble->method("helloWorld")->willReturn("");
        $this->expectOutputString("bye".PHP_EOL);
        $this->first->sayHello($seconddouble);
    }
}
