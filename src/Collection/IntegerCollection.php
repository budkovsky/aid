<?php
namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionAbstract;

/**
 *
 * @author piotrek
 *
 */
class IntegerCollection extends CollectionAbstract
{

    /**
     * Add integer number to the collection
     */
    public function add(?int $item = null): IntegerCollection
    {
        if ($item) {
            $this->collection[] = $item;
        }

        return $this;
    }
}
