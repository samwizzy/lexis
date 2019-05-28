<?php
session_start();
require_once  dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PWD']);

require_once  __DIR__  . '/config/database.php';

$loader = new \Twig\Loader\FilesystemLoader('../'); /* partially passive */
$twig = new \Twig\Environment($loader);

?>