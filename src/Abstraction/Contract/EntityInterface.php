<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction\Contract;

use Budkovsky\Aid\Abstraction\StaticFactoryInterface;
use Budkovsky\Aid\Abstraction\Arrayable;

/**
 * Entity interface
 */
interface EntityInterface extends Arrayable, \JsonSerializable, StaticFactoryInterface
{
}
