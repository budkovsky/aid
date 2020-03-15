<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper\PrimalityTest;

use Budkovsky\Aid\Helper\ModuloComputing;

/**
 * MillerRabin algortihm to test number's primality
 * @see https://eduinf.waw.pl/inf/alg/001_search/0019.php
 */
class MillerRabin
{
    /**
     * Tests number's primality 
     * @param int $p
     * @param int $n
     * @return bool
     */
    public static function isPrime(int $p, int $n = 20): bool
    {
        if (\in_array($p, [2, 3])) {
            return true;
        }
        
        if ($p % 2 === 0) {
            return false;
        }
        
        $s = 0;
        
        for ($d = $p -1; $d % 2 === 0; $s++) {
            $d /= 2;
        }
        
        $t = true;
        
        for ($i = 1; $i <= $n; $i++) {
            $a = \mt_rand(2, $p - 2);
            $x = ModuloComputing::moduloPower($a, $d, $p);
            if ($x === 1 || $x === $p - 1) {
                continue;
            }
            for ($j = 1; ($j < $s) && ($x !== ($p - 1)); $j++) {
                $x = ModuloComputing::moduloMultiply($x, $x, $p);
                if ($x === 1) {
                    $t = false;
                    break;
                }
            }
            
            if (!$t) {
                break;
            }
            
            if ($x !== ($p - 1)) {
                $t = false;
                break;
            }
            
        }
        
        return $t;
    }
}

