<?php
//Логические операторы

$positive = 5 > 1; // true
$negative = 3 ===2; // false

//Логическое И
echo "true and false";
var_dump($positive and $negative);
echo "<br>";

//Логическое ИЛИ
echo "true or false";
var_dump($positive or $negative);
echo "<br>";

//исключающее ИЛИ
echo "true xor false";
var_dump($positive xor $negative);
echo "<br>";

echo "true xor true";
var_dump($positive xor true);
echo "<br>";

//отрицание
echo "!true";
var_dump(!$positive);
echo "<br>";

//Логическое И (больший приоритет чем and)
echo "true && true";
var_dump($positive && $negative);
echo "<br>";

echo "true && false and true";
var_dump($positive && $negative and true);
echo "<br>";

echo "true && true and true";
var_dump($positive && true and true);
echo "<br>";

//ИЛИ (больший приоритет чем or)
echo "true || false";
var_dump($positive || $negative);
echo "<br>";