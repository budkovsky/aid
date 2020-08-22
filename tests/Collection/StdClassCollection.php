<?php
declare(strict_types=1);

namespace Budkovsky\Aid\Tests\Collection;

use Budkovsky\Aid\Partial\CollectionTrait;

/**
 * An example collection class for stdClass objects
 *
 * Implements ItegratorAggregate and Coutable interfaces,
 * defines add() method with type hinting for collection's items
 */
class StdClassCollection implements \IteratorAggregate, \Countable
{
    use CollectionTrait;

    public function add(\stdClass $stdClass): StdClassCollection
    {
        $this->collection[] = $stdClass;

        return $this;
    }

    public static function create(array $collection = []): StdClassCollection
    {
        return new static($collection);
    }
}

