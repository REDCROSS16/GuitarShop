<?php
# db connections
$host = 'localhost';
$db = 'guitarshop';
$user = 'root';
$password = 'root';
$charset = 'utf8';


$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
$options = [
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$pdo = new PDO($dsn, $user, $password, $options);
