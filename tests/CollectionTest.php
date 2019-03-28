<?php
declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Example\StdClassCollection;

class StdClassCollectionTest extends TestCase
{
    public function testCanCreateEmptyCollection(): void
    {
        $this->assertInstanceOf(
            StdClassCollection::class, 
            new StdClassCollection()
        );
        
        $this->assertInstanceOf(
            StdClassCollection::class,
            StdClassCollection::create()
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
        $this->expectException(\TypeError::class);
        StdClassCollection::create([new \ArrayObject()]);
    }
    
    public function testThrowsExceptionOnInvalidItemType2(): void
    {
        $this->expectException(\TypeError::class);
        StdClassCollection::create()->add(new \ArrayIterator());
    }
    
    
    private function getTwoEmptyElementCollection(): StdClassCollection
    {
        return StdClassCollection::create([
            new \stdClass(),
            new \stdClass(),
        ]);
    }
  
}
