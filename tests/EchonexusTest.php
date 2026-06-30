<?php
/**
 * Tests for EchoNexus
 */

use PHPUnit\Framework\TestCase;
use Echonexus\Echonexus;

class EchonexusTest extends TestCase {
    private Echonexus $instance;

    protected function setUp(): void {
        $this->instance = new Echonexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echonexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
