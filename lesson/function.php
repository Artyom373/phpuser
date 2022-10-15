<?php

// функции глобальные, можно вызывать из другой функции

hi();
function sayHello() {
    echo "Hello!!!!";

}
function hi()
{
    sayHello();
}

// пример через ретурн

function rut(){
    return "привет мир";
}
$funrut =rut();
echo $funrut;


// пример вложенных функций

function myName($value1, $value2) {
    return $value1 . " " . $value2 . "!";
}
$name = "Артем";
$secondName = "Иванов";

echo myName($name,$secondName);
echo "<br>";
echo myName("Василий","Пупкин");

// Функции с типом

function fsum(int $vl1, int $vl2): int {
    return $vl1 + $vl2;
}

echo fsum(5, 8);

// Использовать функции в работе Пример:

function stok(string $vol1, string $vol2): string {
    return $vol1 . " " . $vol2 . ": ФИО";
}

function newLine(int $num) {
    for($i = 0; $i < $num; $i++) {
        echo "<br>";
    }

}



echo stok("Иван", "Петров");
newLine(1);
echo stok("Альбер", "Сидоров");
newLine(1);
echo stok("Сергей", "Дарюхин");

//  Использовать функции в работе c присв параметром Пример:

function stok1(string $vol1, string $vol2): string {
    return $vol1 . " " . $vol2 . ": ФИО1";
}

function newLine1(int $num=1) {
    for($i = 0; $i < $num; $i++) {
        echo "<br>";
    }

}



echo stok1("Иван1", "Петров");
newLine1();
echo stok1("Альбер1", "Сидоров");
newLine1(6);
echo stok1("Сергей1", "Дарюхин");