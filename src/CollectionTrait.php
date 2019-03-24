<?php
declare(strict_types=1);

namespace Budkovsky\Aid;

use Budkovsky\Aid\Exception\CollectionType as CollectionTypeException;


/**
 * Collection trait, implements methods for IteratorAggregate, Countable interfaces
 * @author Budkovsky
 *
 */
trait CollectionTrait
{
    /**
     * Item type.
     * for scalar types, must be compatibile with gettype() return value.
     * @see http://php.net/manual/en/function.gettype.php
     * @var string
     */
    protected $itemType = \stdClass::class;
    
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
     * @return Collection
     */
    public function set(array $collection): Collection
    {
        $this->collection = [];
        
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
        if (!$this->isValidItemType($item)) {
            throw new CollectionTypeException('Invalid collection\'s item type');
        }
        $this->collection[] = $item;
        
        return $this;
    }
    
    /**
     * @param mixed $item
     * @return bool
     */
    protected function isValidItemType($item): bool
    {
        $currentItemType = gettype($item);
        
        return $currentItemType == 'object'
            ? $item instanceof $this->itemType
            : $currentItemType == $this->itemType
        ;
    }
}
