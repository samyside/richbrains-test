<?php

class ShapeException extends Exception {
  public function getMessage(): string {
    return "Something goes wrong about Shape class";
  }
}

interface ShapeInterface {
  public function getCornersCount(string ...$shapes): string;
}

abstract class Shape implements ShapeInterface {
  public function getCornersCount(string ...$shapes): string {
    $result = "";
    foreach ($shapes as $shape) {
      $shapeClassname = ucfirst(strtolower($shape));
      try {
        $o = new $shapeClassname();
        $cornerCounts = $o->getCornerCounts();
        $result .= "{$shape} - {$cornerCounts}\n";
      } catch (ShapeException $e) {
        $result .= "{$shape} - 0\n";
      }
    }
    return $result;
  }
}

class Square extends Shape {

}

class Circle extends Shape {

}
