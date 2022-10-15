<?php
// Инструкции if elseif else

$hour = 17;

if ($hour < 12) {
    echo "Доброе утро";
}
elseif ($hour == 12) {
    echo "Сейчас полдень";
}
else {
    echo "Уже вечер";
}