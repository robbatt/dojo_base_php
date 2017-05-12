<?php
/**
 * Created by PhpStorm.
 * User: brendler
 * Date: 11.05.17
 * Time: 17:04
 */

namespace dojo;


use InvalidArgumentException;

class CheckoutTest extends \PHPUnit_Framework_TestCase
{
    /** @var Checkout */
    private $checkout;

    /** @before */
    public function init() {
        $prices = array();
        $prices['A'] = 50;
        $prices['B'] = 30;
        $prices['C'] = 20;
        $prices['D'] = 15;

        $discounts = array();
        $discounts['A'] = new Discount(20, 3);
        $discounts['B'] = new Discount(15, 2);
        
        $this->checkout = new Checkout($prices, $discounts);
    }

    public function testAddProduct() {
        $this->scan('A');

        $this->assertTotalEquals(50);
    }

    public function testAddDiscountedProduct() {
        $this->scan('A');
        $this->scan('A');
        $this->scan('A');

        $this->assertTotalEquals(130);
    }

    public function testSumProductPrices() {
        $this->scan('A'); // has discount (not applied for 1)
        $this->scan('C'); // has no discount

        $this->assertTotalEquals(70);
    }

    public function testTotalInitiallyZero(){
        $this->assertTotalEquals(0);
    }

    public function testGetTotalTwice() {
        $this->scan('A');

        $this->assertTotalEquals(50);
        $this->assertTotalEquals(50);
    }

    public function testThrowsExceptionOnUnknownProductScanned() {
        $this->expectException(InvalidArgumentException::class);
        $this->scan('X');
    }

    public function testComplex() {
        $this->scan('A');
        $this->scan('A');
        $this->scan('A');
        $this->assertTotalEquals(130);
        $this->scan('B');
        $this->assertTotalEquals(160);
        $this->scan('C');
        $this->assertTotalEquals(180);
        $this->scan('A');
        $this->scan('A');
        $this->assertTotalEquals(280);
        $this->scan('A');
        $this->assertTotalEquals(310);
        $this->scan('A');
        $this->assertTotalEquals(360);
        $this->scan('D');
        $this->assertTotalEquals(375);
    }

    private function scan(string $product) {
        $this->checkout->scan($product);
    }

    /**
     * @param $checkout Checkout
     * @param $expected int
     */
    private function assertTotalEquals($expected) {
        $total = $this->checkout->total();
        $this->assertSame($expected, $total);
    }
}
