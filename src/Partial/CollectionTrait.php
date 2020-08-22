<?php
declare(strict_types=1);

namespace Budkovsky\Aid\Partial;

/**
 * Collection trait, implements methods for IteratorAggregate, Countable interfaces
 * When use, implement add() method with proper type hinting for collection's items
 * TODO unit tests
 */
trait CollectionTrait
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
     * {@inheritDoc}
     * @see http://php.net/manual/en/class.iteratoraggregate.php
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->collection);
    }

    /**
     * {@inheritDoc}
     * @see http://php.net/manual/en/class.countable.php
     */
    public function count(): int
    {
        return count($this->collection);
    }

    /**
     * Set or replace the collection
     * @param array $collection
     * @return void
     */
    public function set(array $collection): void
    {
        $this->collection = [];

        foreach ($collection as $item) {
            $this->add($item);
        }
    }

    /**
     * Adds item to the collection
     */
    abstract public function add();
}
