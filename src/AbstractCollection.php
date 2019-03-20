<?php

namespace Budkovsky\Aid;

/**
 * Collection class.
 * Implements ItegratorAggregate and Coutable interfaces.
 * When extending, define valid collection's item type in `ITEM_TYPE` constant property.
 */
abstract class Collection implements \IteratorAggregate, \Countable
{
    /**
     * Item type.
     * for scalar types, must be compatibile with gettype() return value.
     * @see http://php.net/manual/en/function.gettype.php
     * @var string
     */
    protected const ITEM_TYPE = \stdClass::class;

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
     * @return Collection
     */
    public static function create(array $collection = []): Collection
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
     * @return Collection
     */
    public function set(array $collection): Collection
    {
        foreach ($collection as $item) {
            $this->add($item);
        }
        
        return $this;
    }

    /**
     * Add single object to the collection
     * @param object $item
     * @return Collection
     */
    public function add($item): Collection
    {
        
    }
    
    protected function isValidItemType($item): bool
    {
        $validType = static::ITEM_TYPE; 
        $itemType = gettype($item);
        
        return $itemType == 'object'
            ? $item instanceof $validType
            : $itemType == $validType;    
    }
}

