<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\AbstractCollection;

class AbstractCollectionTest extends TestCase
{
    public function testCanMockEmptyObject(): void
    {
        $this->assertInstanceOf(
            AbstractCollection::class, 
            $this->createMock(AbstractCollection::class)
        );
    }
}

