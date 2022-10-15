<?php
//Группировка switch case

$result = 1+2;

switch ($result) {
    case 4:
        echo "Правильно";
        break;
    case 3:
    case 5 - 1:
        echo "Неправильно" . "<br>";
        echo "Может следует все перепроверить?" . "<br>";
        break;
    default:
        echo "Резултат странный";
}

