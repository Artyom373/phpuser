<?php
$hour = 1;
$second = $hour * 3600;
$day = $second * 24;
$week = $day * 7;
print("Секунд в часе:{$second}");
echo "<br>";
print("Секунд в дне:{$day}");
echo "<br>";
print("Секунд в неделе:{$week}");
echo "<br>";
//------------------------

$x = 60;
var_dump($x *= 60);
var_dump($x *=  24);
var_dump($x *=  7);

