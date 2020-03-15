<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Tests\TestCase\Helper;

use Budkovsky\Aid\Helper\GcfComputing;
use PHPUnit\Framework\TestCase;

class GcfComputingTest extends TestCase
{
    private $gfcForTwo = [
        [12, 8, 4], [21, 9, 3], [150, 100, 50], [14, 21, 7], [777, 222, 111], [33, 77, 11], [18, 12, 6], [48, 36, 12]
    ];
    
    public function testCanFindGfcForTwoSmallNumbers(): void
    {
        foreach ($this->gfcForTwo as $record) {
            $this->assertEquals(
                $record[2], 
                GcfComputing::getForTwo($record[0], $record[1])
            );
        }
    }
}
