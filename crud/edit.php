<?php
require '../koneksi/db.php';

// ambil data di url
$id = $_GET["id"];

// query data user berdasarkan id
$user = query("SELECT * FROM users_login WHERE id = $id")[0];
    
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {


    // cek apakah data berhasil ditambahkan atau tidak 
    if(ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil di edit!');
            document.location.href = '../admin/tabeluser.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di edit!');
            document.location.href = '../admin/tabeluser.php';
        </script>
        ";  
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $user["id"] ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required value="<?= $user["username"] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?= $user["email"] ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required value="<?= $user["password"] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
