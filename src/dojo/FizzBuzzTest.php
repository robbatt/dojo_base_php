<?php
declare(strict_types=1);

namespace dojo;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @package dojo
 * @coversDefaultClass \dojo\Dummy
 */
class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz */
    private $fizzBuzz;
    
    /** @before */
    public function init()
    {
        $this->fizzBuzz = new FizzBuzz();
    }
    
    /**
     * Test if fizzbuzz returns the number
     *
     * @test
     * @dataProvider shouldReturnNumberProvider
     */
    public function shouldReturnNumber($param)
    {
        Assert::assertSame(
            "$param",
            $this->fizzBuzz->fizzbuzz($param),
            "Did not return $param on $param");
    }
    
    public function shouldReturnNumberProvider()
    {
        return [
            [1],
            [2],
            [4],
            [7],
            [8],
            [11],
            [13],
            [14],
            [16],
            [17],
            [19]
        ];
    }
    
    /**
     * @test
     * @dataProvider shouldReturnFizzProvider
     */
    public function shouldReturnFizz($param)
    {
        Assert::assertSame(
            FizzBuzz::FIZZ,
            $this->fizzBuzz->fizzbuzz($param),
            "Did not return " . FizzBuzz::FIZZ . " on $param");
    }
    
    public function shouldReturnFizzProvider()
    {
        return [
            [3],
            [6],
            [9],
            [12],
            [18]
        ];
    }
    
    /**
     * @test
     * @dataProvider shouldReturnBuzzProvider
     */
    public function shouldReturnBuzz($param)
    {
        Assert::assertSame(
            FizzBuzz::BUZZ,
            $this->fizzBuzz->fizzbuzz($param),
            "Did not return " . FizzBuzz::BUZZ . " on $param");
    }
    
    public function shouldReturnBuzzProvider()
    {
        return [
            [5],
            [10],
            [20]
        ];
    }
    
    /** @test */
    public function shouldReturnFizzBuzz()
    {
        Assert::assertEquals(
            FizzBuzz::FIZZ . FizzBuzz::BUZZ,
            $this->fizzBuzz->fizzbuzz(15),
            "Did not return " . FizzBuzz::FIZZ . FizzBuzz::BUZZ . " on 15");
    }
}
