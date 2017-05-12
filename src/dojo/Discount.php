<?php
/**
 * Created by PhpStorm.
 * User: brendler
 * Date: 11.05.17
 * Time: 17:01
 */

namespace dojo;


class Discount
{
    protected $discount;
    protected $discountAmount;

    /**
     * Discount constructor.
     * @param int $discount
     * @param int $discountAmount
     */
    public function __construct($discount = 0, $discountAmount = 0)
    {
        $this->discount = $discount;
        $this->discountAmount = $discountAmount;
    }

    /**
     * @return int
     */
    public function getDiscount($amount): int
    {
        if(! $amount > 0) {
            return 0;
        }

        $discountableAmount = floor($amount / $this->discountAmount);
        return $this->discount * $discountableAmount;
    }
}