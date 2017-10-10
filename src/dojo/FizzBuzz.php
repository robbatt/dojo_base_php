<?php
declare(strict_types=1);

namespace dojo;

class FizzBuzz
{
    const FIZZ = "fizz";
    const BUZZ = "buzz";
    
    /**
     * @param $num int
     * @return string
     */
    public function fizzbuzz($num): string
    {
        $result = "";
        
        if ($num % 3 === 0) {
            $result .= self::FIZZ;
        }
        
        if ($num % 5 === 0) {
            $result .= self::BUZZ;
        }
        
        if (empty($result)) {
            return "$num";
        }
        
        return $result;
    }
}
