<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper\Generator;

/**
 * LCG random numbers generator
 * @see https://en.wikipedia.org/wiki/Linear_congruential_generator
 * @see https://eduinf.waw.pl/inf/alg/001_search/0020.php
 */
class Lcg
{
    public static function generate(int $x0 = 0, int $m = 34359738368, int $a = 3141592653, $c = 2718281829): void
    {
        $x = $x0;
       $counter = 0;
       $max = 100;
        do {
            $x = ($a * $x + $c) % $m;
            echo $x . PHP_EOL;
        } while ( $counter++ < $max && $x !== $x0);
    }
}


