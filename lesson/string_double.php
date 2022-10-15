<?php
#$dbh = new PDO(dsn: "pgsql:host=postgres; dbname=postgres", username: "postgresuser", password: "password");
#var_dump($dbh);
#pgsql:host=postgres   postgres -  имя в в файле docker-compose контейнера

#$x =2+2;
#echo $x;
#phpinfo();
/*Мой первый скрипт */
$myPeremen = 10;

/*echo $myPeremen;
echo "Hello word";
echo date("H:i:s");*/
echo "<pre>"; // Нужно чтоб отрабатывал \n

echo '1. Это простая строка';
echo '<br>';


echo '2. Однажды Арнольд сказал "I\'ll be back"';
echo "<br>";

echo '3. Вы уверены что хотите удалить  папку  "C:\\system" ?';
echo "<br>";

echo "4. Перенос сторки \n А это уже новая строка через \\n";
echo "<br>";

$name ="Петя";
echo "5. Привет $name \n";

echo "6. Экраниерование переменной \$name";
echo "<br>";

echo "</pre>";

//$arr= ["a" => 1, "b" => 2];
//echo $arr["b"];
 ?>