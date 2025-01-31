<?php

namespace Samyside\Shapes;

class Circle extends Shape {
  #[\Override]
  protected int $corners = 0;

  public function getCornersCount(): int {
    return $this->corners;
  }
}
