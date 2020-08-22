<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper\PrimalityTest;

/**
 * MillerRabin algortihm to test number's primality
 * @see https://rosettacode.org/wiki/Miller%E2%80%93Rabin_primality_test#PHP
 * @see https://en.wikipedia.org/wiki/Miller%E2%80%93Rabin_primality_test
 */
class MillerRabin
{
    /**
     * Tests number's primality 
     * @param int $p
     * @param int $n
     * @return bool
     */
    public static function isPrime($n, $k) {
        if ($n == 2)
            return true;
        if ($n < 2 || $n % 2 == 0)
            return false;
            
        $d = $n - 1;
        $s = 0;
        
        while ($d % 2 == 0) {
            $d /= 2;
            $s++;
        }
        
        for ($i = 0; $i < $k; $i++) {
            $a = rand(2, $n-1);
            
            $x = bcpowmod((string)$a, (string)$d, (string)$n);
            if ($x === '1' || $x === (string)($n-1))
                continue;
                
                for ($j = 1; $j < $s; $j++) {
                    $x =  bcmod(bcmul((string)$x, (string)$x), (string)$n);
                    if ($x === '1')
                        return false;
                        if ($x == $n-1)
                            continue 2;
                }
                return false;
        }
        return true;
    }
}

