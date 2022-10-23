<?php
echo "Test1", "Test2";
//print "Test3", "Test4"; //Нельзя выводить несколько аргументов
print "Test3";
var_dump(print("test1")); // print всегда возвращает 1


$Light ="желтый";

if ($Light == "зеленый") {
    echo "Идем";
} elseif ($Light == "желтый") {
    echo "Ждем";
    if (2>3) {
     echo "2>3" ;
    } else {
        echo "2<3";
    }
} else{
    echo "стоим";
}

