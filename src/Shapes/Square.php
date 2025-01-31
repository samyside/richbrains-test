<?php

namespace Samyside\Shapes;

class Square extends Shape {
  protected int $corners = 4;

  #[\Override]
  public function getCornersCount(): int {
    return $this->corners;
  }
}
