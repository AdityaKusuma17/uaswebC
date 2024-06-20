<?php

session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user';

$connect = new mysqli (
    $hostname,
    $username,
    $password,
    $dbname
);


?>


