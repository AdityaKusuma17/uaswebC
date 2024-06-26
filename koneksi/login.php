<?php

include 'db.php';

// Start the session if it hasn't been started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $connect->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // ubah password md5 ke text biasa
    $hashedPassword = md5($password);

    $sql = "SELECT * FROM users_login WHERE username = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi apakah password yang diinputkan sama dengan password yang tersimpan di database
        // setelah di decode/decrypt dari md5 ke text biasa
        if ($user['password'] == $hashedPassword) {
            // password benar, simpan informasi di session
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == 'admin') {
                header('Location: ../admin/admin_dashboard.php');
            } else {
                header('Location: ../view/indexUser.php');
            }
            exit();
        } else {
            echo 'Invalid username or password.';
        }
    } else {
        echo 'Invalid username or password.';
    }
}

// decode -> ngubah text yg rumit jadi text biasa
// encode kebalikannya
?>
