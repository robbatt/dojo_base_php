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
    private $dummy;

    /**
     * @before
     */
    public function init()
    {
        $this->dummy = new Dummy();
    }

    /**
     * @test
     */
    public function shouldDoItAnnotatedOnInstance()
    {
        Assert::assertEquals(0, $this->dummy->doIt(0),"not equal");
    }

    public function testDoItStatic()
    {
        //$this->markTestSkipped("must be revisited");

        Assert::assertNotEquals(1, Dummy::doItStatic(0),"not equal");
    }

    public function testShouldThrowException()
    {
        $this->expectException(\InvalidArgumentException::class);
        Dummy::doThrowException(0);
    }

    /**
     * @dataProvider parameterizedTestProvider
     */
    public function testParameterized($a, $expected)
    {
        $this->assertEquals($expected, $this->dummy->doIt($a));
    }

    public function parameterizedTestProvider()
    {
        return [
            [0, 0],
            [1, 0],
            [2, 0],
            [3, 0]
        ];
    }
}
