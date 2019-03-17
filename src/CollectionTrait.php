<?php
declare(strict_types=1);

namespace Budkovsky\Aid;

/**
 * Collection trait, implement methods for IteratorAggregate, Countable interfaces
 * @author Budkovsky
 *
 */
trait CollectionTrait
{
    /**
     * The collection
     * @var array
     */
    protected $collection = [];
    
    /**
     * {@inheritDoc}
     * @see \IteratorAggregate::getIterator()
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->collection);
    }
    
    /**
     * {@inheritDoc}
     * @see \Countable::count()
     */
    public function count(): int
    {
        return count($this->collection);
    }
}
