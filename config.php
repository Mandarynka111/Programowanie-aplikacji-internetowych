<?php
session_start();

$config = [
    "host" => "localhost",
    "username" => "admin",
    "password" => "1234",
    "dbName" => "shop",
];

$mysqli = @new mysqli($config['host'], $config['username'], $config['password'], $config['dbName']);
if ($mysqli->connect_error) {
    die("Connection failure: " . $mysqli->connect_error);
}

require_once('Auth.php');
$auth = new Auth();