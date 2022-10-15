<?php
// Цикл с постусловием

$week = ["Понедельник", "Вторник", "Среда"];
$day = 0;
do {
    echo $week[$day] . " ";
    $day++;

} while ($day < count($week)); //count суммартне количество