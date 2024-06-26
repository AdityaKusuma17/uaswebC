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
    $conn = mysqli_connect("localhost", "root", "", "user");

    // mengambil data untuk halaman admin > kelola user
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // hapus data
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM users_login WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    // edit data
    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $username = htmlspecialchars($data["username"]);
        $email = htmlspecialchars($data["email"]);
        $password = htmlspecialchars($data["password"]);

        $query = "UPDATE users_login SET 
                    username = '$username',
                    email = '$email',
                    password = '$password'
                    WHERE id = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>
