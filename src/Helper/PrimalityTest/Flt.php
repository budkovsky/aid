<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper\PrimalityTest;

use Budkovsky\Aid\Enum\PrimaryNumber;

/**
 * "Fermat Little Theorerm" helper
 * @see https://en.wikipedia.org/wiki/Fermat%27s_little_theorem
 * @see https://eduinf.waw.pl/inf/alg/001_search/0018.php
 */
class Flt
{
    public static function isPrime(int $p): bool
    {
        if ($p === 2) {
            return true;
        }
        
        if ($p < 2 || $p % 2 === 0) {
            return false;
        }
        
        $lp = PrimaryNumber::getFirstThousand();
        for ($i = 0; $i < 169; $i++) {
            if (($p !== $lp[$i]) && ($p % $lp[$i] === 0)) {
                return false;
            }
        }
        if ($p > 1009) {
            for ($i = 1; $i <= 10; $i++) {
                $a = \mt_rand(2, $p - 1);
                if (
                    gmp_strval(\gmp_gcd((string)$p, (string)$a)) !== '1' 
                    || \bcpowmod((string)$a, (string)($p - 1), (string)$p) !== '1'
                ) {
                    return false;
                }
            }
        }
        
        return true;
    }
}
