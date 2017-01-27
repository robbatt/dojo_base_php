<?php
declare(strict_types=1);

namespace dojo;
use phpDocumentor\Reflection\Types\Integer;

class Dummy
{
    /**
     * @param $num Integer
     * @return Integer
     */
    public function doIt($num): int
    {
        return 0;
    }


    /**
     * @param $num Integer
     * @return Integer
     */
    public static function doItStatic($num): int
    {
        return 0;
    }

    /**
     * @param $num Integer
     * @throws \InvalidArgumentException
     * @return void
     */
    public static function doThrowException($num): void
    {
        throw new \InvalidArgumentException("TestException");
    }


}