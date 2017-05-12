<?php
/**
 * Created by PhpStorm.
 * User: brendler
 * Date: 11.05.17
 * Time: 17:03
 */

namespace dojo;

use ArrayObject;
use InvalidArgumentException;

class Checkout
{
    private $products;

    /**
     * Checkout constructor.
     * @param $prices int[]
     * @param $discounts Discount[]
     */
    public function __construct($prices, $discounts)
    {
        $this->products = array();
        $this->prices = $prices;
        $this->discounts = $discounts;
    }


    /**
     * @param $product Product
     */
    public function scan(string $product) {
        if(! isset($this->prices[$product])) {
            throw new InvalidArgumentException("scanned unknown product '$product'");
        }

        $this->products[]= $product;
    }

    /**
     * @return int
     */
    public function total(): int {
        $total = 0;
        $counts = array_count_values($this->products);

        foreach($counts as $product => $count){
            // undiscounted prices
            $price = $this->prices[$product] | 0;
            $total += $price * $count;
            
            // remove discounts
            $total -= $this->getDiscount($product, $count);
        }

        return $total;
    }

    private function getDiscount($product, $count) : int {
        if(! isset($this->discounts[$product])) {
            return 0;
        }
        $discount = $this->discounts[$product];
        return $discount->getDiscount($count);
    }

}