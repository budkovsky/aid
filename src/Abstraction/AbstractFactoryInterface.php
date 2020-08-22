<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Abstract factory interface
 * for implementation of abstract factory design pattern
 * @see https://en.wikipedia.org/wiki/Abstract_factory_pattern
 */
interface AbstractFactoryInterface
{
    static function factory();
}
