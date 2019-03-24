<?php

namespace Budkovsky\Aid;

/**
 * Collection class.
 * Implements ItegratorAggregate and Coutable interfaces.
 * When extending, define valid collection's item type in `itemType` property.
 */
class Collection implements \IteratorAggregate, \Countable
{
    use CollectionTrait;
}

