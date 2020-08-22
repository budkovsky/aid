<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Arrayable interface
 */
interface Arrayable
{
    /**
     * Casts object to an array
     * @return array
     */
    public function toArray(): array;
}
