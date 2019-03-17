<?php

namespace Budkovsky\Aid;

abstract class AbstractCollection implements \IteratorAggregate, \Countable
{
    /**
     * The collection
     * @var array
     */
    protected $collection = [];
    
    /**
     * The constructor
     * @param array $collection
     */
    public function __construct(array $collection = [])
    {
        $this->set($collection);
    }
    
    /**
     * Static creator of the collection object
     * @param array $collection
     * @return AbstractCollection
     */
    public static function create(array $collection = []): AbstractCollection
    {
        return new static($collection);
    }
    
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
    
    /**
     * Set or replace the collection
     * @param array $collection
     * @return AbstractCollection
     */
    public function set(array $collection): AbstractCollection
    {
        foreach ($collection as $item) {
            $this->add($item);
        }
        
        return $this;
    }

    /**
     * Add single object to the collection
     * @param object $item
     * @return AbstractCollection
     */
    abstract public function add(object $item): AbstractCollection;
}

