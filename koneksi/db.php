<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user';
$conn = mysqli_connect(
    $hostname,
    $username,
    $password,
    $dbname
);

if(!$conn){
    echo "gagal koneksi";
}