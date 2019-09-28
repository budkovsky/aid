<?php
namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionAbstract;
use Budkovsky\Aid\Abstraction\Observer;

class ObserverCollection extends CollectionAbstract
{

    public function add(?Observer $observer = null): ObserverCollection
    {
        if ($observer) {
            $this->collection[] = $observer;
        }

        return $this;
    }
}

