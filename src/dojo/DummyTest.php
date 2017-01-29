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

    /** @before */
    public function init()
    {
        $this->dummy = new Dummy();
    }

    /** @test */
    public function shouldDoIt()
    {
        Assert::assertEquals(0, $this->dummy->doIt(0),"not equal");
    }

}
