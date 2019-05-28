<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'username' => getenv('DB_USER'),
	'password' => getenv('DB_PWD'),
	'database' => getenv('DB_NAME'),
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
?>