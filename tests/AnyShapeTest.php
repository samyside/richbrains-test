<?php

use Samyside\Shapes\Shape;
use Samyside\Exceptions\ShapeNotFoundException;
use PHPUnit\Framework\TestCase;

class AnyShapeTest extends TestCase {
  private $shape;

  public function testShapeNotFound() {
    $shapeName = 'Rectangle';

    spl_autoload_register(function ($shapeName) {
      throw new ShapeNotFoundException("Exception: shape '{$shapeName} not found\n");
    });

    $this->expectException(ShapeNotFoundException::class);

    $namespace = "Samyside\\Shapes\\";
    $classname = "{$namespace}{$shapeName}";

    $shape = new $classname();
  }
}
