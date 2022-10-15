<?php
define("CONST_1", "value 1"); // Объявление константы конст1 со значением value1
echo CONST_1;

const CONST_2 = "value 2"; // Объявление константы другим способом.
echo "<p>";
var_dump(CONST_2);

const NAME = "Jon";
echo "Hello, NAME"; // Нельзя так обрашаться к константе

//define("CONST_1", "new value 1"); Нельзя переопрелделить константу, она неизменная

var_dump(get_defined_constants()); // Перечень всех констант
