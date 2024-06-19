<?php

include '../koneksi/db.php';

if (isset($_POST['register'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];


    // Validasi data (lewati ini untuk contoh sederhana)

    $sql = "INSERT INTO user_login (username, password,email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harum - Penginapan Murah di Bali</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/UTSwebC/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <!-- Header -->
    <header class="bg-white shadow-sm py-3 fw-bold fixed-top ">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="indexUser.php">
                    <img src="../img/logo.jpg" alt="Harum Logo" class="img-fluid" style="height: 40px;">
                </a>
            </div>
            <div class="right-side d-flex align-items-center">
                <nav class="navbar d-flex justify-content-end">
                    <a href="#" class="text-dark mx-2">Hotel</a>
                    <a href="#" class="text-dark mx-2">Villa</a>
                    <a href="#" class="text-dark mx-2">Apartemen</a>
                </nav>
                <div class="ml-2">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Login</button>               
                </div>
            </div>   
        </div>
    </header>

    <!-- form -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5 border-0 shadow-lg" style="max-width: 400px;"> 
                <div class="modal-body p-4">
                    <div id="loginForm">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="../img/logo.jpg" alt="Logo Harum" style="max-width: 100px;" class="img-fluid">
                        </div>
                        <h2 class="h5 mb-4 fw-bold text-center">Login to Harum</h2>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill" id="usernameEmail" placeholder="Email or username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill" id="password" placeholder="Password">
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                                <a href="javascript:void(0);" class="text-primary" id="showRegister">belum punya akun? daftar</a>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="indexUser.php" class="btn btn-primary rounded-pill btn-lg" role="button">Next</a>
                            </div>
                            
                        </form>
                    </div>

                    <div id="registerForm" class="d-none">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="../img/logo.jpg" alt="Logo Harum" style="max-width: 100px;" class="img-fluid">
                        </div>
                        <h2 class="h5 mb-4 fw-bold text-center">Register to Harum</h2>
                        <form method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill" id="registerUsername" placeholder="Username" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control rounded-pill" id="registerEmail" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill" id="registerPassword" placeholder="Password" name="password">
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                                <a href="javascript:void(0);" class="text-primary" id="showLogin">sudah punya akun? login</a>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary rounded-pill btn-lg" name="register">Register</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content --> 
    <main class="bg-light">
        <section class="min-vh-100 bg-cover bg-center text-white d-flex align-items-center" style="background-image: url('../img/meckground.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"> 
            <div class="container"> 
                <div class="row">
                    <div class="col-md-12 text-center">  
                        <h4 class="display-6 fw-bold">LOGIN DULU SKUY....</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>    
               

        <!-- subjudul -->
        <div class="subjudul mt-4 p-4">
            <h1 class="h2 font-weight-bold text-dark mb-3">Inspirasi hotel untuk kamu</h1>
            <p>Cek inspirasi menginapmu di Bali sekarang</p>
        </div>
        
        <!-- slider -->
        <div id="carouselExampleInterval" class="carousel slide p-3" data-bs-ride="carousel">
			<div class="carousel-inner">

				<div class="carousel-item active" data-bs-interval="5000">
                    <div class="d-flex justify-content-between grid gap-1">
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek1.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Akomodasi nyaman dekat pantai</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek2.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 2</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek3.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 3</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek4.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 4</p>
						</div>
				    </div>
                </div>
				<div class="carousel-item" data-bs-interval="5000">
                    <div class="d-flex justify-content-between">
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek5.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 1</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek6.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 2</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek7.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 3</p>
						</div>
						<div class="p-2 g-col-6">
							<img src="../img/imageUtama/rek8.jpeg" class="d-block rounded" alt="..." height="300">
							<p>Gambar 4</p>
						</div>
				    </div>
				</div>
                
			</div>
			<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button> -->
		</div>
        <!-- end slider -->

        <!-- main content -->
        <div class="container mt-4 p-4">
        <div class="subjudul mt-4 p-4">
            <h1 class="h2 font-weight-bold text-dark mb-3">Inspirasi menginap untuk liburanmu selanjutnya</h1>
        </div>
        </div>


        <!-- konten 2 -->
         <div class="container">
            <div class="bungkus-konten">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/imageUtama/rek1.jpeg"" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- end main content -->


        <!-- Footer -->
        <footer class="bg-white py-4">
            <div class="container d-flex justify-content-between align-items-center">
                <img src="../img/logo.jpg" alt="" class="img-fluid" style="height: 40px;">
                <span class="text-dark">©2024 - Harum</span>
                <div class="d-flex">
                    <a href="#" class="text-dark mx-2">Tim Developer</a>
                    <a href="#" class="text-dark mx-2">Kontak Kami</a>
                    <a href="#" class="text-dark mx-2">About</a>
                </div>
            </div>
        </footer>
        <script src="./js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>