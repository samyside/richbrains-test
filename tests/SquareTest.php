<?php

use Samyside\Shapes\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase {
  private $square;

  protected function setUp(): void {
    $this->square = new Square();
  }

  #[Test]
  public function testGetCornersCount() {
    $this->assertEquals(4, $this->square->getCornersCount());
  }
}
