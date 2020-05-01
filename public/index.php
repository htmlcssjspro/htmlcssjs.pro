<?php

error_reporting(E_ALL);
session_start();

/**
 * Composer autoloader
 */
require __DIR__ . '/../vendor/autoload.php';

// $app = new App\App\App();

// echo $_ENV['APP_BASE_PATH'];

echo 'i am ' . __FILE__ . '<br>';

// Dev\Debug::vd($_SESSION);
// Dev\Debug::vd($_COOKIE);
// Dev\Debug::print($_COOKIE);
Dev\Debug::print($_ENV);
// Dev\Debug::server();
// Dev\Debug::print($_SERVER);
// Dev\Debug::vd($_GET);
// Dev\Debug::vd($_POST);
