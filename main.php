<?php

require_once __DIR__ . 'vendor/autoload.php';

use Samyside\Shapes\Square;
use Samyside\Shapes\Circle;
use Samyside\Exceptions\ShapeNotFoundException;

/**
 * Отлавливает исключение, в случаях когда имя фигуры не зарегистрировано
 */
spl_autoload_register(function ($shapeName) {
  throw new ShapeNotFoundException("Exception: shape '{$shapeName} not found\n");
});

/**
 * Выводит сообщение, в котором каждая строчка состоит из имени предполагаемой
 * фигуры и количества углов оной, если имя неизвестно - "$shapeName - not define".
 * 
 * @param string ...$shapesName  Неограниченное кол-во фигур, через запятую
 * @return string
 */
function getShapeCornersCount(string ...$shapesName): string {
  $result = '';
  foreach ($shapesName as $shapeName) {
    try {
      $classname = "Samyside\\Shapes\\" . ucfirst(strtolower($shapeName));
      $shape = new $classname();
      $corners = $shape->getCornersCount();
      $result .= "{$shapeName} - {$corners}\n";
    } catch (ShapeNotFoundException $e) {
      $result .= "{$shapeName} - not defined\n";
    }
  }
  return $result;
}
