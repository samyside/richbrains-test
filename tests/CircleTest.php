<?php

use Samyside\Shapes\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase {
  private $circle;

  protected function setUp(): void {
    $this->circle = new Circle();
  }

  public function testGetCornersCount() {
    $this->assertEquals(0, $this->circle->getCornersCount());
  }
}
