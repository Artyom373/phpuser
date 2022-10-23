<?php
$test="null";
var_dump($test);

$Light = "green";
if ($Light == "green") {
    echo "You can go now";
} else {
    echo "stop";
}

// Тернарный оператор

echo ($Light == "green") ? "Go" : "stop";

//$price = 1;
echo $price ? $price : "нет цены";
echo $price ?: "нет цены";  // аналогичная запись