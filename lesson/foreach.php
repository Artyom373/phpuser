<?php


// Цикл foreach

$nums = [12, 7, 5, 4];
foreach ($nums as $num) {
    if ($num % 2 !== 0) {
        continue;
    }
    echo $num . "<br>";
}

//Еще один пример
$nums = [12, 7, 5, 4];

foreach ($nums as $key => $num) {
    echo "Ключ " . $key . " Значение" . $num . "<br>";
}


// Еще пример к доступу по ключам

$persons = [
    "Петя" => "25",
    "Коля" => "13",
    "Ваня" => "21"
];
foreach ($persons as $name => $age) {
    echo "Имя " . $name . " Возраст " . $age . "<br>";
}
