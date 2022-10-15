<?php

// Цикл while
$i = 0;
while ($i<10) {
    $i++;
    if ($i == 5) {
        continue; // не завершает весь цикл
    }
    echo $i . "<br>";
};

echo "Цикл с break" . "<br>";

$i = 0;
while ($i < 10) {
    $i++;
    if ($i == 5) {
        break; //Завершает весь цикл
    }
    echo $i . "<br>";
};