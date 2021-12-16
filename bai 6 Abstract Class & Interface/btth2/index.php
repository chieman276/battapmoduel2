<?php

include "Comparator.php";
include "Circle.php";
//khởi tạo lớp Circle
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 5);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));