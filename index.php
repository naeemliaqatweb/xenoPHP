<?php

use App\Services\Route;

define("APP_ROOT", __DIR__);

require_once(APP_ROOT . '/vendor/autoload.php');

// autoload for namespace classes
spl_autoload_register(function ($class) {
         $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class . '.php');
         // $classPath = APP_ROOT . '/app/' . $classFile;
         $classPath = APP_ROOT . '/' . $classFile;

         if (file_exists($classPath)) {
                  require_once($classPath);
         }
});
session_start();


$route = new Route();
require_once(APP_ROOT . '/routes/route.php');
$route->handle();
