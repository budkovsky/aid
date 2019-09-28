<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Validator silent mode interface
 */
interface SilentModeInterface
{
    /**
     * Setter for validator's silent mode(throws no exception)
     * @param bool $isSilent
     */
    function setSilentMode(bool $isSilent);

    /**
     * Getter of silent mode
     * @return bool
     */
    function isSilentMode(): bool;
}
