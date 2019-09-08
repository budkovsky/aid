<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Collection interface
 */
interface CollectionInterface extends \IteratorAggregate, \Countable, Arrayable
{
    /**
     * Sets whole collection, replaces old one, if exists
     * @param array $collection
     */
    public function set(array $collection);

    /**
     * Adds item to the collection
     */
    public function add();
}
