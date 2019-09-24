<?php
namespace Budkovsky\Aid\Tests\TestCase;

use PHPUnit\Framework\TestCase;
use Budkovsky\Aid\Helper\RandomString;

class RandomStringTest extends TestCase
{
    public function testCanGenerateOneHundertUniqueRandomStrings(): void
    {
        $results = [];

        for ($i=100; $i>0; $i--) {
            $randomString = RandomString::get();
            $this->assertNotContains($randomString, $results);
            echo $randomString.PHP_EOL;
            $results[] = $randomString;
        }
    }
}
