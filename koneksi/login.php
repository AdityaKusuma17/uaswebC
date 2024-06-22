<?php

include 'db.php';

// Start the session if it hasn't been started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $connect->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Hash the input password with MD5
    $hashedPassword = md5($password);

    $sql = "SELECT * FROM user_login WHERE username = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];

        // Verify hashed password
        if ($hashedPassword == $user['password']) {
            $_SESSION['username'] = $user['username'];
            header('Location: ../view/indexUser.php');
            exit();
        } else {
            echo 'Invalid username or password.';
        }
    } else {
        header('location: ../view/index.php');
    }
}
?>
