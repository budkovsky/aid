<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Abstraction;

/**
 * Collection with named indexes abstract class
 */
abstract class CollectionIndexedAbstract extends CollectionAbstract
{

    /**
     * @inheritdoc
     * @param string $index Array's index of the collection item to add
     */
    abstract public function add(?string $index = null);

    /**
     * @param string $index Array's index of the collection item to get
     */
    abstract public function get(string $index);
}
