<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../view/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
