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
        $mock = $this->createMock(FooModule::class);
        $mock->method('foo')->willReturn('bar');

        $this->assertEquals('bar', $mock->foo());
    }

}
