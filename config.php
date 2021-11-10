<?php
//DATOS acceso a BBDD

$dbhost=$_ENV['DDBB_HOST'];
$dbname=$_ENV['DB_NAME'];
$dbuser=$_ENV['DDBB_USER'];
$dbpasswd=$_ENV['DDBB_PASSWORD'];
$dsn='mysql:host='.$dbhost.';dbname='.$dbname. ';charset=utf8mb4';

