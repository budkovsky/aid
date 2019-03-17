<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\AbstractCollection;

class AbstractCollectionTest extends TestCase
{
    public function testCanMockEmptyObject(): void
    {
        $this->assertInstanceOf(AbstractCollection::class, $this->getStub());
    }
    
    
    protected function getStub(): AbstractCollection
    {
        return $this->createMock(AbstractCollection::class);
    }
}

