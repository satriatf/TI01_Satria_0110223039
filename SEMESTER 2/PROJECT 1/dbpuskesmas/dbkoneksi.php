<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dbpuskesmas';
$charset = 'utf8mb4';

$dsn ="mysql:host=$host;dbname=$database;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

$dbh = new PDO($dsn,$username,$password,$opt);
?>
