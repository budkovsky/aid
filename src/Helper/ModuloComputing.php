<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper;

/**
 * Modulo operations' computing helper
 * Based on Jerzy Walaszek article about chinese primality test.
 * @see https://eduinf.waw.pl/inf/alg/001_search/0017.php 
 */
class ModuloComputing
{
    /**
     * Computing modulo multiply "(a * b) mod n"
     * @param int $multiplierA
     * @param int $multilpierB
     * @param int $moduloN
     * @return int
     */
    public static function moduloMultiply(int $multiplierA, int $multiplierB, int $ModuloN): int
    {
        $result = 0;
        $bitmask = 1;
        
        while ($bitmask) {
            if ($multiplierB & $bitmask) {
                $result = ($result + $multiplierA) % $ModuloN;
            }
            $multiplierA = ($multiplierA << 1) % $ModuloN;
            $bitmask <<= 1;
        }
        
        return $result;
    }
    
    /**
     * Computing modulo power "2^e mod n".
     * @param int $exponent
     * @param int $ModuloN
     * @return int
     */
    public static function moduloPower(int $expontent, int $modulo, int $base = 2): int
    {
        $result = 1;
        $bitmask = 1;
        
        while ($bitmask) {
            if ($expontent & $bitmask) {
                $result = self::moduloMultiply($result, $base, $modulo);
            }
            $base = self::moduloMultiply($base, $base, $modulo);
            $bitmask <<= 1;
        }
        
        return $result;
    }
}
