<h1>Задание №2</h1>

//1. Дана задача: На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков,
//выполненные красками, на школьной выставке?
//2. Описать и вывести условия, решение этой задачи на PHP. Все числа должны быть указаны в переменных.

<?php
echo "Всего 80 рисунков" . "<br>";
echo "23 фломастерами" . "<br>";
echo "40 карандашами" . "<br>";
echo "Рисунков красками = ";
?>

<?php
define("DRAWINGS", 80);
$markers = 23;
$pencils = 40;
echo $paints = DRAWINGS - $markers - $pencils;
?>