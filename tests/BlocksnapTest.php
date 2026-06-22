<?php
/**
 * Tests for BlockSnap
 */

use PHPUnit\Framework\TestCase;
use Blocksnap\Blocksnap;

class BlocksnapTest extends TestCase {
    private Blocksnap $instance;

    protected function setUp(): void {
        $this->instance = new Blocksnap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocksnap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
