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
        /** @var \PHPUnit_Framework_MockObject_MockObject $mock */
        $mock = $this->createMock(FooModule::class);
        $mock->method('foo')->willReturn('bar');

        /** @var FooModule $mock */
        $this->assertEquals('bar', $mock->foo());
    }

}
