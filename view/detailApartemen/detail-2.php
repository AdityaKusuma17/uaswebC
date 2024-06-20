<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rooms Apartment Bali by ARM Hospitality</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- cdn slider js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<header class="bg-white shadow-sm py-3 fw-bold fixed-top ">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="indexUser.php">
                    <img src="../../img/logo.jpg" alt="Harum Logo" class="img-fluid" style="height: 40px;">
                </a>
            </div>
            <div class="right-side d-flex align-items-center">
                <nav class="navbar no-underline d-flex justify-content-end">
                    <a href="indexMenuHotel.php" class="text-dark mx-2">Hotel</a>
                    <a href="menuVilla.php" class="text-dark mx-2">Villa</a>
                    <a href="menuApartemen.php" class="text-dark mx-2">Apartemen</a>
                </nav>
                <div class="dropdown ml-2">
                    <a href="#" class="dropdown-toggle no-underline" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> <span class="ms-2"></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="profile.php">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.php">Log Out</a></li>
                    </ul>
                </div>
                
            </div>   
        </div>
</header>

    <main>
        <section class="apartment-detail py-5 mt-5">
            <div class="container">
                <h2>Candra Loka Studio & Apartment by The Loka</h2>
                <div class="row">
                    <div class="col-md-8">
                        <img src="../../img/imgDetailApartemen/20073833-fc5d0719de3aba754eb1863a95daf160.webp" class="img-fluid" alt="The Rooms Apartment Bali by ARM Hospitality">
                    </div>
                    <div class="col-md-4">
                        <h6>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Jl. Muding Indah Gg. Palm no. 8, Kerobokan, Kuta, Denpasar, Bali, Canggu, Kuta Utara, Bali, Indonesia, 80363
                        </h6>
                        <p>Harga mulai IDR 406.686</p>
                        <p>Deskripsi detail tentang apartemen...</p>
                        <p>Candra Loka Studio & Apartment by The Loka adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.
                            Pelayanan yang baik dengan harga terjangkau akan membuat Anda merasa nyaman menginap di Candra Loka Studio & Apartment by The Loka.</p>
                        <h2><strong>Fasilitas</strong></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Fasilitas umum</h5>
                                <ul>
                                    <li>AC</li>
                                    <li>Ruang keluarga </li>
                                    <li>Area bebas asap rokok</li>
                                    <li>Kolam renang</li>
                                    <li>Teras rooftop</li>
                                    <li>Area merokok</li>
                                    <li>Teras</li>
                                    <li>wifi di area umum</li>
                        </ul>
                            </div>
                            <div class="col-md-6">
                                <h5>Fasilitas kamar</h5>
                                <ul>
                                    <li>Meja</li>
                                    <li>Cable TV</li>
                                    <li>TV</li>
                                    <li>Dapur kecil</li>
                                    <li>Pancuran</li>
                               </ul>
                            </div>
                        </div>
                        <button id="detailKamarBtn" class="btn btn-info">Detail Kamar</button>
                        <div id="detailKamar" class="mt-3" style="display: none;">
                            <h5>Detail Kamar</h5>
                            <p>Kamar di Candra Loka Studio & Apartment by The Loka dilengkapi dengan berbagai fasilitas modern untuk kenyamanan Anda, termasuk AC, tempat tidur yang nyaman, kamar mandi pribadi dengan shower, TV layar datar, dan area dapur kecil.</p>
                            <p>Harga per malam:  IDR 406.686</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="kamar1.jpg" data-bs-toggle="modal" data-bs-target="#imageModal1">
                                        <img src="../../img/imgDetailApartemen/Screenshot 2024-06-13 132422.png" class="img-fluid" alt="Kamar 1">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="kamar2.jpg" data-bs-toggle="modal" data-bs-target="#imageModal2">
                                        <img src="../../img/imgDetailApartemen/Screenshot 2024-06-13 132352.png" class="img-fluid" alt="Kamar 2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="../menuApartemen.php" class="btn btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel1">Kamar </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../../img/imgDetailApartemen/20073833-be59ef566ae8745d8839276b29517600.webp" class="img-fluid" alt="Kamar 1">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel2">pembuat kopi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../../img/imgDetailApartemen/20073833-728368c4670a5bf0762897b25583d8c0.webp" class="img-fluid" alt="Kamar 2">
                </div>
            </div>
        </div>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('detailKamarBtn').addEventListener('click', function() {
            var detailKamar = document.getElementById('detailKamar');
            if (detailKamar.style.display === 'none') {
                detailKamar.style.display = 'block';
                this.textContent = 'Sembunyikan Detail Kamar';
            } else {
                detailKamar.style.display = 'none';
                this.textContent = 'Detail Kamar';
            }
        });
    </script>
</body>
</html>
