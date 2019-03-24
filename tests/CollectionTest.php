<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Collection;
use Budkovsky\Aid\Exception\CollectionType as CollectionTypeExceptiion;

class CollectionTest extends TestCase
{
    public function testCanCreateEmptyCollection(): void
    {
        $this->assertInstanceOf(
            Collection::class, 
            new Collection()
        );
        
        $this->assertInstanceOf(
            Collection::class,
            Collection::create()
        );
        
    }
    
    public function testCanIterate(): void
    {
        $collection = $this->getTwoEmptyElementCollection();
        foreach ($collection as $item) {
            $item; //do nothing
        }
        $this->assertTrue(true);  
    }
    
    public function testCanCount(): void
    {
        $collection = $this->getTwoEmptyElementCollection();
        $this->assertEquals(2, count($collection));
    }
    
    public function testThrowsExceptionOnInvalidItemType1(): void
    {
        $this->expectException(CollectionTypeExceptiion::class);
        Collection::create([new \ArrayObject()]);
    }
    
    public function testThrowsExceptionOnInvalidItemType2(): void
    {
        $this->expectException(CollectionTypeExceptiion::class);
        Collection::create()->add(new \ArrayIterator());
    }
    
    private function getTwoEmptyElementCollection(): Collection
    {
        return Collection::create([
            new \stdClass(),
            new \stdClass(),
        ]);
    }
  
}
