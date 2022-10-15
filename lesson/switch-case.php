<?php
// Инструкция switch-case

$result = 2 +6;

switch ($result) {
    case 3:
        echo "Мало";
        break;
    case 4:
        echo "в точку";
        break;
    case 5:
        echo "Перебор";
        break;
    default:
        echo "нет такого значения";
}


define("SUM", "+");
define("RAZN", "-");
define("UMN", "*");
define("EEE", "yyy");

$deystvie = EEE;
$a =5;
$b = 2;
$result = NULL;

switch ($deystvie) {
    case SUM:
        $result = $a + $b;
        break;

    case RAZN:
        $result = $a - $b;
        break;

    case UMN:
        $result = $a * $b;
        break;

    default:
        echo "Нет значений";

}
if (isset($result )) {
    echo $a . $deystvie . $b . "=" . $result;

}