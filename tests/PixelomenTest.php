<?php
/**
 * Tests for PixelOmen
 */

use PHPUnit\Framework\TestCase;
use Pixelomen\Pixelomen;

class PixelomenTest extends TestCase {
    private Pixelomen $instance;

    protected function setUp(): void {
        $this->instance = new Pixelomen(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelomen::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
