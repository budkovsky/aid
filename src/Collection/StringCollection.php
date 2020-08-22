<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionAbstract;

/**
 * StringCollection
 */
class StringCollection extends CollectionAbstract
{

    /**
     * Adds string to the collection
     * @param string $item
     * @return StringCollection
     */
    public function add(?string $item = null): StringCollection
    {
        if ($item) {
            $this->collection[] = $item;

        }

        return $this;
    }
}

