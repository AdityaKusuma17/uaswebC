<?php

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

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>
