<?php
namespace Budkovsky\Aid\Tests\TestCase\Helper\PrimalityTest;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Enum\PrimaryNumber;
use Budkovsky\Aid\Helper\PrimalityTest\Flt;

class FltTest extends TestCase
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
        foreach([4, 28, 2016, 234678, 16546722, 1234567890, 4234567890123456786] as $number) {
            $this->assertFalse(Flt::isPrime($number));
        }
    }
    
    protected function verifyCollection(array $collection): void
    {
        foreach ($collection as $number) {
            $this->assertTrue(Flt::isPrime($number));
        }
    }
}
