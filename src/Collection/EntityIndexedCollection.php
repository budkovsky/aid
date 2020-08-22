<?php
namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionIndexedAbstract;
use Budkovsky\Aid\Abstraction\EntityInterface;

class EntityIndexedCollection extends CollectionIndexedAbstract
{

    public function add(?string $index = null, ?EntityInterface $entity = null): EntityIndexedCollection
    {
        if ($index && $entity) {
            $this->collection[$index] = $entity;
        }

        return $this;
    }

    public function get($index): ?EntityInterface
    {
        return $this->collection[$index] ?? null;
    }
}

