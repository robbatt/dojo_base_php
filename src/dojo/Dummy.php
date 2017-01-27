<?php
declare(strict_types=1);

namespace dojo;

use InvalidArgumentException;

class Dummy
{
    /**
     * @param $num int
     * @return int
     */
    public function doIt($num): int
    {
        return $num;
    }


    /**
     * @param $num int
     * @return int
     */
    public static function doItStatic($num): int
    {
        return $num;
    }

    /**
     * @param $num int
     * @throws InvalidArgumentException
     * @return void
     */
    public static function doThrowException($num): void
    {
        throw new InvalidArgumentException("TestException");
    }

    /**
     * @param $num int
     * @return int
     */
    public function doItPartiallyCovered($num): int
    {
        if($num > 1) {
            if($num > 2) {
                return 3;
            }
            return 2;
        }
        if($num > 0) {
            return 1;
        }
        return $num;
    }

}