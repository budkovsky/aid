<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionAbstract;
use Budkovsky\Aid\Abstraction\EntityInterface;

/**
 * Entity Collection
 */
class EntityCollection extends CollectionAbstract
{

    /**
     * @param EntityInterface $entity
     * @return EntityCollection
     */
    public function add(?EntityInterface $entity = null): EntityCollection
    {
        if ($entity) {
            $this->collection[] = $entity;
        }

        return $this;
    }
}
