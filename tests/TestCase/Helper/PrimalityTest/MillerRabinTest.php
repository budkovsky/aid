<?php
namespace Budkovsky\Aid\Tests\TestCase\Helper\PrimalityTest;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Enum\PrimaryNumber;
use Budkovsky\Aid\Helper\PrimalityTest\MillerRabin;

class MillerRabinTest extends TestCase
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
    
    public function testCanRejectCompositeNumbers(): void {
        foreach([1005, 3003, 5005, 7007, 9009, 10005] as $number) {
            $this->assertFalse(MillerRabin::isPrime($number, 20));
        }
    }
    
    protected function verifyCollection(array $collection): void
    {
        foreach ($collection as $number) {
            $this->assertTrue(MillerRabin::isPrime($number, 20));
        }
    }
}

