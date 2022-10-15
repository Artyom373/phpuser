<?php
// Тип данных буливо
$bool = true;
$bool2 = false;
var_dump($bool);
echo "<br>";
var_dump(($bool2));
echo "<br>";
echo $bool;
echo "<br>";
var_dump((bool)0, (bool)"", (bool)"Hello", (bool)123);
echo "<br>";

// Тип данных число
$int = 123;
var_dump($int);
echo "<br>";
var_dump((int)"10"); // Числовая строка "10"
echo "<br>";
var_dump((int)"11Hello"); //Префиксная числовая строка "11"
echo "<br>";
var_dump((int)"Hello12"); //Не числовая строка "0"
echo  "<br>";
var_dump("10"+ 30); // "40"
echo  "<br>";

//Тип данных дробная
$float = 123.56;
var_dump($float);
echo  "<br>";
var_dump(0.2 + 0.1); //float(0.30000000000000004)
echo  "<br>";
var_dump((0.2 *10 + 0.1 *10 )/ 10); //float(0.3)