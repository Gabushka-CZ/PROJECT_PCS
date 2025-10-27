<?php

require "controllers/OnasController.php";
require "controllers/TestController.php";
require "views.php";

$routes = [
"/onas" => "showAbout",
"/rezervace" => "showReservation",
"/tom" => "showTom",
"/test" => "showTest",
];

$request = [
    "requested_url" => $_SERVER['REQUEST_URI'],
    "post" => $_POST,
    "get" => $_GET,
];

if(array_key_exists($request['requested_url'], $routes))
{
    $callback = $routes[$request['requested_url']];
    $callback($request);
}else{
    zobrazHTML("error");
}