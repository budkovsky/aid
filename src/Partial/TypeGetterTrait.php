<?php
namespace Budkovsky\Aid\Partial;

/**
 * Type getter trait
 * Implemention for TypeGetterInterface
 */
trait TypeGetterTrait
{
    public static function getType(): string
    {
        return static::class;
    }
}
