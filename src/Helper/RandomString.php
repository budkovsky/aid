<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper;

/**
 * Random string generator
 * @see https://stackoverflow.com/a/13212994
 */
abstract class RandomString
{
    const BASE = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public static function get($length = 10, string $base = self::BASE): string
    {
        return substr(str_shuffle(str_repeat(
                $base,
                (int)ceil($length/strlen($base))
            )), 1, $length);
    }
}
