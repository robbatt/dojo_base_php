<?php
declare(strict_types=1);

namespace dojo\extended;

use PHPUnit\Framework\TestCase;

/**
 * @package dojo\extended
 * @coversDefaultClass \dojo\extended\Extended
 */
class ExtendedParamTest extends TestCase
{
    /**
     * @test
     * @dataProvider parameterizedTestProvider
     */
    public function shouldDoItParameterized($param, $expected)
    {
        $this->assertEquals($expected, Extended::doItStatic($param));
    }

    public function parameterizedTestProvider()
    {
        return [
            [0, 0],
            [1, 1],
            [2, 2]
        ];
    }

}
