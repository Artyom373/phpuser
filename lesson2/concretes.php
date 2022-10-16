<?php
$a = "Иванов";
var_dump($a . " Иван"); // Склеили два значения
echo "hello {$a}"; // можно выводить значение переменной

echo "<p>Hello 1</p>\n";
echo PHP_EOL;
echo "<p>Hello 2</p>\n";
// Склеиваем
echo "<p>Hello 1</p>" . PHP_EOL . "<p>Hello 2</p>" . PHP_EOL;

