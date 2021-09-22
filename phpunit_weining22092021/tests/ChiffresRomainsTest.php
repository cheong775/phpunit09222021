<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ChiffresRomainsTest extends TestCase
{
    public function testRomain1(): void
    {
        $this->assertEquals(true, ChiffresRomains::DecimalToRoman(4));
    }

    public function testRomain2(): void
    {
        $this->assertEquals(false, ChiffresRomains::DecimalToRoman(70));
    }

    public function testRomain3(): void
    {
        $this->assertFalse(ChiffresRomains::DecimalToRoman(1000));
    }

    public function testRomain4(): void
    {
        $this->assertTrue(ChiffresRomains::DecimalToRoman(2000));
    }
}

?>