<?php
//require __DIR__ . '/app/autoload.php';
require __DIR__ . '/vendor/autoload.php';
const ADMIN_IDS = [9];
$route = new \App\Route();


$app = new \App\Application($route);
$app->run();
