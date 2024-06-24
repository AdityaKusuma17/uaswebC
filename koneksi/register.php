<?php
include 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $connect->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $email = $connect->real_escape_string($_POST['email']);

    // ubah password dari text biasa ke md5 sebelum dikirim ke database
    $hashedPassword = md5($password);

    $query = "INSERT INTO users_login (username, password, email) VALUES ('$username', '$hashedPassword', '$email')";

    if (mysqli_query($connect, $query)) {
        echo "Berhasil disimpan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>
