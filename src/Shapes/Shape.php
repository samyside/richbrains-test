<?php

namespace Samyside\Shapes;

use Samyside\Interfaces\ShapeInterface;
use Samyside\Exceptions\ShapeNotFoundException;


abstract class Shape implements ShapeInterface {
  protected int $corners;

  #[\Override]
  public function getCornersCount(): int {
    return $this->corners;
  }

  // public function getCornersCount(string ...$shapes): string {
  //   $result = "";
  //   foreach ($shapes as $shape) {
  //     $shapeClassname = ucfirst(strtolower($shape));
  //     try {
  //       $o = new $shapeClassname();
  //       $cornerCounts = $o->getCornerCounts();
  //       $result .= "{$shape} - {$cornerCounts}\n";
  //     } catch (ShapeNotFoundException $e) {
  //       $result .= "{$shape} - not defined\n";
  //     }
  //   }
  //   return $result;
  // }
}
