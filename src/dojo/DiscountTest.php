<?php
/**
 * Created by PhpStorm.
 * User: brendler
 * Date: 11.05.17
 * Time: 17:04
 */

namespace dojo;


use PHPUnit_Framework_TestCase;

class DiscountTest extends PHPUnit_Framework_TestCase
{
    public function testNoDiscountIfAmountLess() {
        $discount = new Discount(30, 2);

        $discountLess = $discount->getDiscount(1);
        $this->assertSame(0, $discountLess);
    }

    public function testSingleDiscountIfAmountEqual() {
        $discount = new Discount(30, 2);

        $discountEqual = $discount->getDiscount(2);
        $this->assertSame(30, $discountEqual);
    }

    public function testSingleDiscountIfAmountOver() {
        $discount = new Discount(30, 2);

        $discountOver = $discount->getDiscount(3);
        $this->assertSame(30, $discountOver);
    }

    public function testDoubleDiscountIfAmountDouble() {
        $discount = new Discount(30, 2);

        $discountDouble = $discount->getDiscount(4);
        $this->assertSame(60, $discountDouble);
    }

    public function testDoubleDiscountIfAmountOverDouble() {
        $discount = new Discount(30, 2);

        $discountOverDouble = $discount->getDiscount(5);
        $this->assertSame(60, $discountOverDouble);
    }

}
