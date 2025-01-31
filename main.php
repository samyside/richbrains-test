<?php

require_once 'vendor/autoload.php';

use Samyside\Shapes\Square;
use Samyside\Shapes\Circle;
use Samyside\Exceptions\ShapeNotFoundException;

// Определяем цвета
$red      = "\033[31m";
$green    = "\033[32m";
$yellow   = "\033[33m";
$blue     = "\033[34m";
$magenta  = "\033[35m";
$cyan     = "\033[36m";
$color    = "\033[0m"; // Сброс цвета

/**
 * Тестирование
 */

echo "{$green}Start...{$color}\n";

/**
 * 
 */
function getShapeCornersCount(string ...$shapesName): string {
  $result = '';
  foreach ($shapesName as $shapeName) {
    try {
      $classname = "Samyside\\Shapes\\" . ucfirst(strtolower($shapeName));
      if (!class_exists($classname)) {
        throw new ShapeNotFoundException("Shape is not defined", 1);
      }
      $shape = new $classname();
      $corners = $shape->getCornersCount();
      $result .= "{$shapeName} - {$corners}\n";
    } catch (ShapeNotFoundException $e) {
      $result .= "{$shapeName} - not defined\n";
    }
  }
  return $result;
}

echo getShapeCornersCount('square', 'circle', 'triangle', 'ASDFqwer');

echo "{$red}Finish.{$color}\n";
