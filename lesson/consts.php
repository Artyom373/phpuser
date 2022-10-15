<?php
//Определяем константу типа string
define("TEXT", "Hello");

//Определяем константу типа string
const PATH_TO_MY_PROJECT = '/some/patch/to/my/project';

//Определяем константу типа array
define("DATA", [true, "Hello 2", 10, 55.12]);

//Обращение к существующей константе
$res = defined("DATA");

var_dump($res);

