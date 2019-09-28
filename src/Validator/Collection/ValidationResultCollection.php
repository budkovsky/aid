<?php
namespace Budkovsky\Aid\Validator\Collection;

use Budkovsky\Aid\Abstraction\CollectionIndexedAbstract;
use Budkovsky\Aid\Validator\Entity\ValidationResult;

class ValidationResultCollection extends CollectionIndexedAbstract
{

    public function add(?string $index = null, ?ValidationResult $validatonResult = null): ValidationResultCollection
    {
        if ($index && $validatonResult) {
            $this->collection[$index] = $validatonResult;
        }

        return $this;
    }

    public function get(string $index): ValidationResult
    {
        return $this->collection[$index];
    }
}
