<?php
// Присваение значения
$name = "Alex";

//Проверка на существование
$isNameSet = isset($name);

var_dump($isNameSet);
//Уничтожение
unset($name);

var_dump($name);
?>