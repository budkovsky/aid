# aid
A library with helpers and other useful snippets of code.

## CollectionTrait
```
Budkovsky\Aid\CollectionTrait
```
Trait for easy implementation of typed collection. 
Implements methods for IteratorAggregate nad Countable interfaces. 
When use, define add() method with collection's items type hinting. 
Example of use:
```
use Budkovsky\Aid\CollectionTrait;

class StdClassCollection implements \IteratorAggregate, \Countable
{
    use CollectionTrait;
    
    public function add(\stdClass $stdClass): StdClassCollection
    {
        $this->collection[] = $stdClass;
        
        return $this;
    }
}
```
