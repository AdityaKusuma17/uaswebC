<?php

session_start()
include 'db.php';

$sql = "SELECT * FROM user_login where username =? and password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
if($stmt->execute() ) {
    $result = $stmt->get_result();
    if($result->num_rows > 0 ) {
        $row = $result->fetch_assoc();
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        header("location: ../view/profile.php");
    }
    else {
        $err_msg = "Invalid username or password";
    }
}
