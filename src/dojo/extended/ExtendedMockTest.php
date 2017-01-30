<?php
declare(strict_types=1);

namespace dojo\extended;

use PHPUnit\Framework\TestCase;

/**
 * @package dojo\extended
 * @coversDefaultClass \dojo\extended\Extended
 */
class ExtendedMockTest extends TestCase
{
    /** @test */
    public function shouldMockIt()
    {
        //$this->markTestSkipped("phpunit mocking module seems broken for windows, skip this in order to keep composer task 'test-loop' clean");

        /** @var \PHPUnit_Framework_MockObject_MockObject $mock */
        $mock = $this->createMock(FooModule::class);
        $mock->method('foo')->willReturn('bar');

        /** @var FooModule $mock */
        $this->assertEquals('bar', $mock->foo());
    }

}
