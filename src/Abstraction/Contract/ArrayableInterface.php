<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction\Contract;

/**
 * Arrayable interface
 */
interface ArrayableInterface
{
    /**
     * Casts object to an array
     * @return array
     */
    public function toArray(): array;
}
