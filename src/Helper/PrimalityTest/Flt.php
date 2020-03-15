<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper\PrimalityTest;

use Budkovsky\Aid\Enum\PrimaryNumber;
use Budkovsky\Aid\Helper\GcfComputing;
use Budkovsky\Aid\Helper\ModuloComputing;

/**
 * "Fermat Little Theorerm" helper
 * @see https://en.wikipedia.org/wiki/Fermat%27s_little_theorem
 * @see https://eduinf.waw.pl/inf/alg/001_search/0018.php
 */
class Flt
{
    public static function isPrime(int $p): bool
    {
        $t = true;
        
        $lp = PrimaryNumber::getFirstThousand();
        for ($i = 0; $i < 169; $i++) {
            if (($p !== $lp[$i]) && ($p % $lp[$i] === 0)) {
                $t = false;
                break;
            }
        }
        if ($t && $p > 1009) {
            for ($i = 1; $i <= 10; $i++) {
                $a = \mt_rand(2, $p - 1);
                if (GcfComputing::getForTwo($p, $a) !== 1 || ModuloComputing::moduloPower($a, $p - 1, $p) !== 1) {
                    $t = false;
                    break;
                }
            }
        }
        
        return $t;
    }
}
