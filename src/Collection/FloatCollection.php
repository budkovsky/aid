<?php
namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionAbstract;

/**
 *
 * @author piotrek
 *
 */
class FloatCollection extends CollectionAbstract
{

    /**
     * Add loat number to the collection
     */
    public function add(?float $item = null): FloatCollection
    {
        if ($item) {
            $this->collection[] = $item;
        }

        return $this;
    }
}
