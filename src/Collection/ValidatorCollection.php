<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionIndexedAbstract;
use Budkovsky\Aid\Validator\Abstraction\ValidatorAbstract;

class ValidatorCollection extends CollectionIndexedAbstract
{

    public function add(?string $index = null, ?ValidatorAbstract $validator = null): ValidatorCollection
    {
        if ($index && $validator) {
            $this->collection[$index] = $validator;
        }

        return $this;
    }
    public function get(string $index): ?ValidatorAbstract
    {
        return $this->collection[$index] ?? null;
    }
}
