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
    
    public function testCanBeExtended(): void
    {
        $this->assertInstanceOf(
            AbstractCollection::class,
            $this->getStub()
        );
    }
    
    protected function getStub(): AbstractCollection
    {
        return new class extends AbstractCollection {
            public function add(\stdClass $item): AbstractCollection
            {
                $this->collection[] = $item;
                
                return $this;
            }
        };
    }
}

