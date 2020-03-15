<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper\PrimalityTest;

use Budkovsky\Aid\Helper\ModuloComputing;

/**
 * Chinese Remainder primality test
 * @see https://en.wikipedia.org/wiki/Chinese_remainder_theorem
 * @see https://eduinf.waw.pl/inf/alg/001_search/0017.php
 */
class ChineseRemainder
{
    /**
     * Tests number with "chinese remainder primality test" algorithm
     * Works properly for values below 4611686018427387904(2^62).
     * Values close to PHP_MAX_INT don't work.
     * The highest tested working value is3874204890000000001.
     * @param int $number
     * @return bool
     */
    public static function isPrime(int $number): bool
    {
        return $number === 2 || ModuloComputing::moduloPower($number, $number) == 2;
    }
}
