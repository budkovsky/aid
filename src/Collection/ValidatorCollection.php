<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Collection;

use Budkovsky\Aid\Abstraction\CollectionAbstract;
use Budkovsky\Aid\Validator\Abstraction\ValidatorAbstract;

class ValidatorCollection extends CollectionAbstract
{

    public function add(?ValidatorAbstract $validator = null): ValidatorCollection
    {
        if ($validator) {
            $this->collection[] = $validator;
        }

        return $this;
    }
}

