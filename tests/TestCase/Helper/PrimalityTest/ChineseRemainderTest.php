<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Tests\TestCase\Helper\PrimalityTest;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Enum\PrimaryNumber;
use Budkovsky\Aid\Helper\PrimalityTest\ChineseRemainder;

class ChineseRemainderTest extends TestCase
{
    public function testCanTestFirstThounsandPrimaryNumbers(): void
    {
        $this->verifyCollection(PrimaryNumber::getFirstThousand());
    }
    
    public function testCanTestSamplePrimeNumbers(): void
    {
        $this->verifyCollection(PrimaryNumber::getSample());
    }
    
    public function testCanTestLargePrimeNumbers(): void
    {
        $this->verifyCollection(PrimaryNumber::getLarge());
    }
        
    protected function verifyCollection(array $collection): void
    {
        foreach ($collection as $number) {
            $this->assertTrue(ChineseRemainder::isPrime($number));
        }
    }
}
