<?php
declare(strict_types=1);

namespace dojo;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @package dojo
 * @coversDefaultClass \dojo\Dummy
 */
class DummyTest extends TestCase
{
    /** @var Dummy */
    private $dummy;

    /**
     * @before
     */
    public function init()
    {
        $this->dummy = new Dummy();
    }

    /** not annotated, method name begins with test */
    public function testShouldDoIt()
    {
        Assert::assertEquals(0, $this->dummy->doIt(0),"not equal");
    }

    /** @test */
    public function shouldDoItStatic()
    {
        Assert::assertNotEquals(1, Dummy::doItStatic(0),"not equal");
    }

    /**
     * @test
     * @dataProvider parameterizedTestProvider
     */
    public function shouldDoItParameterized($a, $expected)
    {
        $this->assertEquals($expected, Dummy::doItStatic($a));
    }

    public function parameterizedTestProvider()
    {
        return [
            [0, 0],
            [1, 1],
            [2, 2]
        ];
    }

    /** @test */
    public function shouldThrowException()
    {
        $this->expectException(\InvalidArgumentException::class);
        Dummy::doThrowException(0);
    }

    /** @test */
    public function shouldBePartiallyCovered()
    {
        $this->assertEquals(0, $this->dummy->doItPartiallyCovered(0));
        $this->assertEquals(1, $this->dummy->doItPartiallyCovered(1));
    }

    /** @test */
    public function shouldBeSkipped() {
        $this->markTestSkipped("must be revisited");
    }


}
