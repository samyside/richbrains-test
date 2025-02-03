# RichBrains
Тестовое задание от компании RichBrains\

Требуется сделать функцию `getShapeCornersCount(string ...$shapes)`, которая принимает неограниченное количество строковых аргументов. В качестве аргументов названия геометрических фигур. В случае если фигура зарегистрирована вывести строчку в виде: "SHAPE_NAME - CORNERS_COUNT", иначе "SHAPE_NAME - not defined". Должно быть выполнено в стиле ООП.

Например:
```
square - 4
circle - 0
triangle - not defined
```

## Как добавить новую фигуру
1. В каталоге с проектом создать новый класс/файл `./src/Shapes/NewShape`
2. Расширить абстрактный класс `Shape`
3. В свойстве класса $corners указать количество углов

## Скачать и протестировать
1. Клонировать на локалку
`clone https://github.com/samyside/richbrains-test.git`

2. Перейти в каталог с проектом
`cd /path/to/project`

3. Запуск тестов
`./vendor/bin/phpunit tests`
