<?php
declare(strict_types=1);

namespace dojo\extended;

use InvalidArgumentException;

class Extended
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
     * @throws InvalidArgumentException
     * @return void
     */
    public static function doThrowException(): void
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

    /**
     * @param $dependency FooModule
     * @return string
     */
    public static function doItOnDependency($dependency) : string
    {
        return $dependency->foo();
    }

}