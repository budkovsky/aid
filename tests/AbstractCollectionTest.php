<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\AbstractCollection;

class CollectionTest extends TestCase
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
}
