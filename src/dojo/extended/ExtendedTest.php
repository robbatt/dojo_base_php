<?php
declare(strict_types=1);

namespace dojo\extended;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @package dojo\extended
 * @coversDefaultClass \dojo\extended\Extended
 */
class ExtendedTest extends TestCase
{
    /** @var Extended */
    private $extended;

    /** @before */
    public function init()
    {
        $this->extended = new Extended();
    }

    /** not annotated, method name begins with test */
    public function testShouldDoIt()
    {
        Assert::assertEquals(0, $this->extended->doIt(0),"not equal");
    }

    /** @test */
    public function shouldDoItStatic()
    {
        Assert::assertNotEquals(1, Extended::doItStatic(0),"not equal");
    }

    /** @test */
    public function shouldThrowException()
    {
        $this->expectException(\InvalidArgumentException::class);
        Extended::doThrowException();
    }

    /** @test */
    public function shouldBePartiallyCovered()
    {
        $this->assertEquals(0, $this->extended->doItPartiallyCovered(0));
        $this->assertEquals(1, $this->extended->doItPartiallyCovered(1));
    }

    /** @test */
    public function shouldBeSkipped() {
        $this->markTestSkipped("must be revisited");
    }


}
