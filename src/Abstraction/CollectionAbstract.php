<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Abstract collection
 */
abstract class CollectionAbstract implements CollectionInterface
{
    /**
     * Collection's container
     * @var array
     */
    protected $collection;

    /**
     * @inheritdoc
     */
    public function __construct(?array $collection = null)
    {
        $this->collection = $collection ?? [];
    }

    /**
     * {@inheritDoc}
     * @see \IteratorAggregate::getIterator()
     * @see http://php.net/manual/en/class.iteratoraggregate.php
     */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->collection);
    }

    /**
     * {@inheritDoc}
     * @see \Countable::count()
     * @see http://php.net/manual/en/class.countable.php
     */
    public function count(): int
    {
        return count($this->collection);
    }

    /**
     * {@inheritDoc}
     */
    public function set(array $collection)
    {
        $this->collection = [];

        foreach ($collection as $item) {
            $this->add($item);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        return $this->collection;
    }

    /**
     * Static factory
     * {@inheritdoc}
     * @return CollectionAbstract
     */
    public static function create(): CollectionAbstract
    {
        return new static;
    }
}
