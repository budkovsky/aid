<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper;

/**
 * Greatest common factor(GCF) helper
 * @see https://en.wikipedia.org/wiki/Greatest_common_divisor
 * @param int $numberA
 * @param int $numberB
 * @return int
 */
class GcfComputing
{
    /**
     * Finds the greatest common factor(GCF) of two numbers
     * @param int $numberA
     * @param int $numberB
     * @return int
     */
    public static function getForTwo(int $numberA, int $numberB): int
    {
        while ($numberA !== $numberB) {
            if ($numberA < $numberB) {
                $numberB = $numberB - $numberA;
            } else {
                $numberA = $numberA - $numberB;
            }
        }
        
        return $numberA;
    }
}
