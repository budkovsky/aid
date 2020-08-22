<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionIndexedAbstract;

class StringNamedCollection extends CollectionIndexedAbstract
{

    public function add($index = null, ?string $value = null): StringNamedCollection
    {
        if ($index && $value) {
            $this->collection[$index] = $value;
        }

        return $this;
    }

    public function get(string $index): ?string
    {
        return $this->collection[$index] ?? null;
    }
}

