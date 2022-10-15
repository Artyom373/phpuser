<?php

// Цикл for c true

$week = [1 => "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Восресенье"];
$weekDay = 1;
$month = [];

for ( $day =1; true; $day++ ) {
    $month[$day] = $week[$weekDay];
    if ($weekDay % 7 === 0) {
        break ;
    }
    else {
        $weekDay++;
    }
}
echo "<pre>";
print_r($month);
