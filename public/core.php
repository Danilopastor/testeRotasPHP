<?php
require __DIR__.'/../vendor/autoload.php';
define('SERVER', [
    'root' => 'http://localhost',
    'aplication_path' => '/testeRotasPHP/public',
]);

$caminho = str_replace(SERVER['aplication_path'],'',$_SERVER['REQUEST_URI']);
$rota = require __DIR__.'/../Routes/routes.php';


if (!array_key_exists($caminho,$rota)){
    echo "caminho nao encontrado";
}else{
    $ClasseEncontrada = $rota[$caminho];
    $class =new $ClasseEncontrada;
    $class->render();
}