<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DecimalTest extends TestCase
{
    public function testDecimal1(): void
    {
        $this->assertEquals(true, Decimal::RomanToDecimal('I'));
    }

    public function testDecimal2(): void
    {
        $this->assertEquals(false, Decimal::RomanToDecimal('II'));
    }

    public function testDecimal3(): void
    {
        $this->assertFalse(Decimal::RomanToDecimal('IV'));
    }

    public function testDecimal4(): void
    {
        $this->assertTrue(Decimal::RomanToDecimal('VI'));
    }
}

?>