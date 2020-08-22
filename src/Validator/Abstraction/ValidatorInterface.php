<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Validator\Abstraction;

/**
 * Validator interface
 */
interface ValidatorInterface
{
    /**
     * Simple boolean of validation result, null if validation not executed
     * @return bool
     */
    function isValid(): ?bool;

    /**
     * Validation process runner
     */
    function validate();
}
