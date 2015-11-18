<?php

include '../vendor/autoload.php';

if(in_array($_SERVER['SERVER_NAME'], ['localhost', 'customedomain.local'])){
    $env = 'production';
} else {
    $env = 'development';
}

$cfg = new Iplox\Config([
    'directory' => dirname(__DIR__).DIRECTORY_SEPARATOR.'src',
    'namespace' => 'App',
    'env' => $env
]);

$app = new Iplox\Mvc\Module($cfg);
$app->init();