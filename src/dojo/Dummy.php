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
        return 0;
    }


    /**
     * @param $num int
     * @return int
     */
    public static function doItStatic($num): int
    {
        return 0;
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


}