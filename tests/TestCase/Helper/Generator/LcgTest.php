<?php
declare(strict_types = 1);

namespace Budkovsky\Aid\Tests\TestCase\Helper\Generator;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Helper\Generator\Lcg;

class LcgTest extends TestCase
{
    public function testSmallStream(): void
    {
        //Lcg::generate(0, 12, 13, 7);
        Lcg::generate();
        $this->markTestSkipped();
    }
}

