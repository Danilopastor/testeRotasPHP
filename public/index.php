<?php
require __DIR__.'/../vendor/autoload.php';
$caminho = $_SERVER['PATH_INFO'] ?? '/';
$rota = require __DIR__.'/../Routes/routes.php';

if (!array_key_exists($caminho,$rota)){
    echo "caminho nao encontrado";
}else{
    $ClasseEncontrada = $rota[$caminho];
    $class =new $ClasseEncontrada;
    $class->render();
}