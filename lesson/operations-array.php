<?php

$week = [
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday"


];
//  isset если есть значение то отправляет true
if (isset($week[7])){
    echo $week[1];
}
else {
    echo "Нет такого значения";
}
echo "<pre>";
// unset удаляет значение
unset($week[3]);
print_r($week);

// count подсчет элементов в массиве
print_r(count($week));

// Добавить несколько элементов
array_push($week, "new day", "new day");
print_r($week);

// найти значение в массиве
var_dump(in_array("new day", $week));

// Преобразовать маасив в строку с выбором разделителя
print_r(implode(", ", $week));

// вернуть ключи в новый массив
print_r(array_keys($week));

// вернуть значения в новый массив
print_r(array_values($week));
echo "</pre>";