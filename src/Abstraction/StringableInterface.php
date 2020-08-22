<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Stringable interface
 */
interface StringableInterface
{
    /**
     * Casts object to the string
     * @return string
     */
    public function __toString(): string;
}

