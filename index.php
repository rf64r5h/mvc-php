<?php


$classe = $_GET['classe'];
$metodo = $_GET['metodo'];

$classe .= 'Controller';

require_once 'controller/' . $classe . '.php';

$objeto = new $classe();
$objeto->$metodo();