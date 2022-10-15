<?php
//сокрашение синтаксиса if else

$hour   = 18;
if ($hour < 19) {
    echo "Открыто";
}
else {
    echo "Закрыто";
}
echo "<br>";


$state = $hour < 19 ? "Открыто" : "Закрыто";
echo $state;
