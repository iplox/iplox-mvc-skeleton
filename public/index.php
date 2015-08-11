<?php

include '../vendor/autoload.php';


if(preg_match('/localhost/', $_SERVER['SERVER_NAME']) === 0){
    $env = 'production';
}

$cfg = new Iplox\Config([
    'directory' => dirname(__DIR__).DIRECTORY_SEPARATOR.'src',
    'namespace' => 'App',
    'env' => $env,
    'notFoundHandler' => 'NotFound->indexAction'
]);


$app = new Iplox\Mvc\Module($cfg);
$app->init();