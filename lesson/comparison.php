<?php
//Операции сравнение

//равно (после преобразование типов)
echo '2 == "2"';
var_dump(2 == "2");
echo "<br>";

echo '2 == "abc"';
var_dump(2 == "abc");
echo "<br>";

echo '7 == 7';
var_dump(7 == 7);
echo "<br>";

// тождественно равно (имеет тот же тип)
echo '2 === "2"';
var_dump(2 === "2");
echo "<br>";

echo '7 === 7';
var_dump(7 === 7);
echo "<br>";

//не равно
echo '2 != "2"';
var_dump(2 != "2");
echo "<br>";

echo '7 != 7';
var_dump(7 != 7);
echo "<br>";

//не равно тождественно
echo '2 !== "2"';
var_dump(2 != "2");
echo "<br>";

echo '7 !== 7';
var_dump(7 != 7);
echo "<br>";