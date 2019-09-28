<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Helper;

/**
 * Simply entity test for properties, getters and setters
 */
class EntityTest
{

    /**
     * Check are there are any public properties in the entity, exclusions allowed
     * @param \ReflectionClass $reflector
     * @param array $exclusions Array of the excluded properties names
     * @return bool
     */
    public static function hasNoPublicProperties(\ReflectionClass $reflector, array $exclusions = []): bool
    {
        foreach ($reflector->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            /** @var \ReflectionProperty $property */
            if (!\in_array($property->name, $exclusions)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check are there are proper getters for the properities in the entity, exclusions allowed
     * @param \ReflectionClass $reflector
     * @param array $exclusions Array of the excluded properties names
     * @return bool
     */
    public static function hasValidGetters(\ReflectionClass $reflector, array $exclusions = []): bool
    {
        foreach ($reflector->getProperties() as $property) {
            /** @var \ReflectionProperty $property */
            if (\in_array($property->getName(), $exclusions)) {
                continue;
            }
            if (!self::hasGetter($reflector, $property)) {
                echo "{$reflector->getName()}::{$property->getName()} doesn't have valid getter";
                die;
                return false;
            }
        }

        return true;
    }

    /**
     * Check are there are proper setters for the properities in the entity, exclusions allowed
     * @param \ReflectionClass $reflector
     * @param array $exclusions Array of the excluded properties names
     * @return bool
     */
    public static function hasValidSetters(\ReflectionClass $reflector, array $exclusions = []): bool
    {
        foreach ($reflector->getProperties() as $property) {
            /** @var \ReflectionProperty $property */
            if (\in_array($property->getName(), $exclusions)) {
                continue;
            }
            if (!self::hasSetter($reflector, $property)) {
                echo "{$reflector->getName()}::{$property->getName()} doesn't have valid setter";
                return false;
            }
        }

        return true;
    }

    /**
     * Checks has single property proper getter
     * @param \ReflectionClass $reflector
     * @param \ReflectionProperty $property
     * @return bool
     */
    private static function hasGetter(\ReflectionClass $reflector, \ReflectionProperty $property): bool
    {
        return
            $reflector->hasMethod(
                    self::getGetterName($property->getName())
                )
            || $reflector->hasMethod(
                    self::getBooleanGetterName($property->getName())
                )
        ;
    }

    /**
     * Checks has single property proper setter
     * @param \ReflectionClass $reflector
     * @param \ReflectionProperty $property
     * @return bool
     */
    private static function hasSetter(\ReflectionClass $reflector, \ReflectionProperty $property): bool
    {
        return $reflector->hasMethod(
            self::getSetterName($property->getName())
        );
    }

    /**
     *
     * @param string $propertyName
     * @return string
     */
    private static function getGetterName(string $propertyName): string
    {
        return sprintf(
            'get%s',
            \ucfirst($propertyName)
        );
    }

    private static function getBooleanGetterName(string $propertyName): string
    {
        return sprintf(
            'is%s',
            \ucfirst($propertyName)
        );
    }

    private static function getSetterName(string $propertyName): string
    {
        return sprintf(
            'set%s',
            \ucfirst($propertyName)
        );
    }
}
