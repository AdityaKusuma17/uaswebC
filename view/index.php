<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harum - Penginapan Murah di Bali</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>               
                </div>
            </div>   
        </div>
    </header>

    <!-- form login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5 border-0 shadow-lg" style="max-width: 400px;"> 
                <div class="modal-body p-4">
                    <div id="loginForm">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="../img/logo.jpg" alt="Logo Harum" style="max-width: 100px;" class="img-fluid">
                        </div>
                        <h2 class="h5 mb-4 fw-bold text-center">Login to Harum</h2>
                        <form action="../koneksi/login.php" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill" id="username" placeholder="username" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill" id="password" placeholder="Password" name="password">
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                               <p class="text-primary border-bottom border-1 border-primary" data-bs-toggle="modal" data-bs-target="#registerModal" style="cursor: pointer;">belum punya akun?</p>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary rounded-pill btn-lg" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form register -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-5 border-0 shadow-lg" style="max-width: 400px;"> 
                <div class="modal-body p-4">
                    <div id="registerForm">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="../img/logo.jpg" alt="Logo Harum" style="max-width: 100px;" class="img-fluid">
                        </div>
                        <h2 class="h5 mb-4 fw-bold text-center">Register to Harum</h2>
                        <form action="../koneksi/login.php" method="post">
                        <div class="mb-3">
                                <input type="email" class="form-control rounded-pill" id="email" placeholder="email" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill" id="username" placeholder="username" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill" id="password" placeholder="Password" name="password">
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                            <p class="text-primary border-bottom border-1 border-primary" data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor: pointer;">sudah punya akun?</p>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary rounded-pill btn-lg" type="submit">Regsiter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Content --> 
    <main class="bg-light">
        <!-- Hero Section -->
        <section class="min-vh-100 bg-cover bg-center text-white" style="background-image: url('../img/meckground.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"> 
            <div class="container d-flex align-items-center h-100">
                <div class="row align-items-center w-100">
                    <div class="col-md-6 text-start"> 
                        <h4 class="display-6 fw-bold">Penginapan murah yang ada di Bali.</h4>
                    </div>
                    <div class="col-md-6 mt-5 p-5">
                        <div class="rounded-5 card bg-light p-4"> 
                            <h6 class="text-secondary">Cari hotel yuk..</h6>
                            <div class="mb-3">
                                <label for="location" class="form-label">Mau nginep dimana?</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-location-crosshairs"></i></span>
                                    <input type="text" class="form-control" id="location" placeholder="Masukkan lokasi">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Cari</button>
                        </div>
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
        </div>
        <!-- end slider -->

        <!-- hotel content -->
        <div class="container mt-5">
            <h1 class="text-center h2 font-weight-bold text-dark mb-4"><span class="text-primary">Rekomendasi hotel </span>bintang 5 untuk anda!</h1>
            <div class="bungkus-luar d-flex p-4">
                <div class="konten-kiri mr-3">
                    <img src="../img/imageUtama/apurva.png" alt="" class="img-kanan" height="490px" width="600px">
                </div>
                <div class="konten-kanan">
                    <h3 class="text-primary mx-5 fw-bold">The Apurva Kempinski Bali</h3>
                    <p class="ms-5">(5,0)
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </p>
                    <p class="ms-5">mulai dari <span class="text-danger fw-bold">IDR.5.270.760</span></p>
                    <div class="keterangan ms-5 text-start">
                        <h5 class="fs-5">Standing atop the majestic cliff of Nusa Dua, with breathtaking views of the Indian Ocean and tropical garden, this five-star hotel in Bali offers a collection of 475 iconic rooms, suites and villas with unique culinary journey, indigenous spa treatments, spacious meeting rooms and alluring chapels.</h5>
                        <div class="kontak mt-3">
                            <p>
                            <i class="fa-regular fa-envelope"></i>
                            info.bali@kempinski.com
                            </p>
                            <p>
                                <i class="fa-light fa-phone"></i>
                                +62 361 209 2288
                            </p>
                            <p>
                            <i class="fa-light fa-location-dot"></i>                            Nusa Dua - Bali, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hotel content -->

        <!-- Villa content -->
        <div class="container mt-4 p-4">
            <h1 class=" subjudul-villa text-center font-weight-bold mb-4"><span>Best Villa </span>di Bali <span>hanya untukmu.</span></h1>
            <div class="bungkus-luar d-flex p-4">
                <div class="konten-kiri mr-3">
                <h3 class="fw-bold">Alam Ubud Culture Villas And 
                Residences</h3>
                    <p>(5,0)
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </p>
                    <div class="harga d-flex">
                        <div class="kiri">
                        <p class="text-danger">IDR 12.000.000</p>
                        </div>
                        <div class="kanan mx-5">
                            <p> Breakfast include 1 week, 2 adults</p>
                        </div>
                    </div>
                    <div class="keterangan">
                    Alam Ubud Villa is nestled secretly within the valley and surrounded by the tropical forest, Alam Ubud Villa is a resort that took more than pure effort to build. Perched atop wooden pillars and hugging the rugged hillsides, these beautiful villas give you stunning panoramic views of the gorgeous green landscape.
                    </div>
                    <div class="kontak mt-3">
                    <p>
                        <i class="fa-regular fa-envelope"></i>
                            info.bali@kempinski.com
                    </p>
                    <p>
                        <i class="fa-light fa-phone"></i>
                            +62 361 209 2288
                    </p>
                    <p>
                        <i class="fa-light fa-location-dot"></i>                            Nusa Dua - Bali, Indonesia
                    </p>
                    </div>
                </div>
                <div class="konten-kanan">
                    <img src="../img/imageUtama/apurva.png" alt="" class="img-kanan" height="490px" width="600px">
                </div>
            </div>
        </div>
        <!-- end Villa content -->

         <!-- appartemen content -->
         <div class="container mt-4 p-4">
            <h1 class="text-center h2 font-weight-bold text-dark mb-4">Rekomendasi Apartemen<span class="text-bs-primary">bikin</span> kamu <span>nyaman</span></h1>
            <div class="bungkus-luar d-flex p-4">
                <div class="konten-kiri mr-3">
                    <img src="../img/imageUtama/primeplaza.png" alt="" class="img-kanan" height="490px" width="600px">
                </div>
                <div class="konten-kanan">
                    <h3 class="text-primary mx-5 fw-bold">Prime Plaza suites Sanur - Bali</h3>
                    <p class="ms-5">(5,0)
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </p>
                    <p class="ms-5">mulai dari <span class="text-danger fw-bold">IDR.5.270.760</span></p>
                    <div class="keterangan ms-5 text-start">
                        <h5 class="fs-5">Standing atop the majestic cliff of Nusa Dua, with breathtaking views of the Indian Ocean and tropical garden, this five-star hotel in Bali offers a collection of 475 iconic rooms, suites and villas with unique culinary journey, indigenous spa treatments, spacious meeting rooms and alluring chapels.</h5>
                        <div class="kontak mt-3">
                            <p>
                            <i class="fa-regular fa-envelope"></i>
                            info.bali@kempinski.com
                            </p>
                            <p>
                                <i class="fa-light fa-phone"></i>
                                +62 361 209 2288
                            </p>
                            <p>
                            <i class="fa-light fa-location-dot"></i>                            Nusa Dua - Bali, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end appartemen content -->


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
        
        <!-- js cdn swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- js costum -->
        <script src="../js/script.js"></script>
            <!-- bootstrap js -->
        <script src="../js/bootstrap.bundle.min.js">

        </script>

        

    </body>
</html>