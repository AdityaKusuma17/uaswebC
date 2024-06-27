<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- cdn slider js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    .hotel-card {
        display: flex;
        flex-wrap: wrap;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 1050px;
        margin: 20px auto;
    }

    .hotel-card img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
    }

    .hotel-content {
        padding: 20px;
    }

    .hotel-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .hotel-rating i {
        color: #ffc107;
    }

    .select-rooms {
        display: block;
        width: 100%;
        text-align: center;
        padding: 10px;
        background-color: #007bff;
        color: white;
        font-size: 1.2rem;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 20px;
    }

    .select-rooms:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <!-- Navbar -->
    <header class="bg-white shadow-sm py-3 fw-bold fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="indexUser.php">
                    <img src="../../img/logo.jpg" alt="Harum Logo" class="img-fluid" style="height: 40px;">
                </a>
            </div>
            <div class="right-side d-flex align-items-center">
                <nav class="navbar no-underline d-flex justify-content-end">
                    <a href="../menuHotel.php" class="text-dark mx-2">Hotel</a>
                    <a href="../menuVilla.php" class="text-dark mx-2">Villa</a>
                    <a href="../menuApartemen.php" class="text-dark mx-2">Apartemen</a>
                </nav>
                <div class="dropdown ml-2">
                    <a href="#" class="dropdown-toggle no-underline" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> <span class="ms-2"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="profile.php">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php">Log Out</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section class="apartment-detail py-5 mt-5">
            <div class="container">
                <div class="hotel-card row">
                    <div class="col-md-6">
                        <img src="../../img/imageForMenuTampilan/furama.jpg" class="img-fluid"
                            alt="The Rooms Apartment Bali by ARM Hospitality">
                    </div>
                    <div class="col-md-6 hotel-content">
                        <div class="hotel-title"></div>
                        <div class="hotel-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            This accommodation is the perfect choice for you and your partner to enjoy a romantic
                            getaway. Experience a memorable stay with your loved one at FuramaXclusive Ocean Beach
                            Seminyak. Do you love shopping? Don't hesitate to stay at FuramaXclusive Ocean Beach
                            Seminyak. Its strategic location near various shopping destinations will delight you during
                            your stay.
                        </p>
                        <a href="#rooms" class="select-rooms">SELECT ROOMS</a>
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-primary mb-4">Facilities</h2>
                    <div class="col-md-4 mb-4">
                        <h5><i class="fas fa-bed me-2"></i>Room Amenities</h5>
                        <ul class="list-unstyled">
                            <li>Bathroom</li>
                            <li>Cable TV</li>
                            <li>Desk</li>
                            <li>Shower</li>
                            <li>TV</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5><i class="fas fa-building me-2"></i>Public Facilities</h5>
                        <ul class="list-unstyled">
                            <li>Parking area</li>
                            <li>Café</li>
                            <li>Elevator</li>
                            <li>Restaurant</li>
                            <li>Room service</li>
                            <li>Safe</li>
                            <li>WiFi in public areas</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5><i class="fas fa-utensils me-2"></i>Food and Beverage</h5>
                        <ul class="list-unstyled">
                            <li>Bar</li>
                            <li>Breakfast</li>
                            <li>Buffet breakfast</li>
                            <li>Café</li>
                            <li>Show cooking restaurant</li>
                            <li>Snacks</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5><i class="fas fa-concierge-bell me-2"></i>Hotel Services</h5>
                        <ul class="list-unstyled">
                            <li>Bellboy</li>
                            <li>Concierge/guest services</li>
                            <li>Money changer</li>
                            <li>24-hour front desk</li>
                            <li>24-hour security</li>
                            <li>Laundry</li>
                            <li>Limited hours room service</li>
                            <li>Luggage storage</li>
                            <li>Tour services</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5><i class="fas fa-child me-2"></i>Other Activities</h5>
                        <ul class="list-unstyled">
                            <li>Children's play area</li>
                            <li>Garden</li>
                            <li>Massage services</li>
                            <li>Outdoor swimming pool</li>
                            <li>Poolside sun loungers</li>
                            <li>Spa</li>
                            <li>Sun loungers</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5><i class="fas fa-snowflake me-2"></i>General</h5>
                        <ul class="list-unstyled">
                            <li>Air conditioning</li>
                            <li>Family room</li>
                            <li>Smoke-free area</li>
                            <li>Swimming pool</li>
                            <li>Terrace</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu Kamar -->
        <hr>
        <section class="menu-kamar py-3">
            <div class="container" id="rooms">
                <h2 class="text-center text-primary mb-4">ROOMS</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="../../img/Hotels/rooms2-furamax.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Studio</h5>
                                <p class="card-text">IDR 412.500</p>
                                <button class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#detailKamarModal-studio">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="../../img/Hotels/rooms2-furamax.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Suite 1 Bedroom</h5>
                                <p class="card-text">IDR 412.500</p>
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailKamarModal-suite1">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="../../img/Hotels/rooms2-furamax.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Suite 2 Bedroom</h5>
                                <p class="card-text">IDR 412.500</p>
                                <button class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#detailKamarModal-suite2">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="location py-3">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <h3><i class="fa fa-map-marker" aria-hidden="true"></i> LOCATION</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.942873282106!2d115.16258877359753!3d-8.696975288602587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246e0820e5887%3A0x9742329b32b58f17!2sJl.%20Arjuna%20No.88x%2C%20Seminyak%2C%20Kec.%20Kuta%2C%20Kabupaten%20Badung%2C%20Bali%2080361!5e0!3m2!1sid!2sid!4v1718954464196!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal Section -->
    <div class="modal fade" id="detailKamarModal-studio" tabindex="-1" aria-labelledby="detailKamarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-content-scrollable">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailKamarModalLabel">Detail Room Studio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kamar di The Rooms Apartment Bali by ARM Hospitality dilengkapi dengan berbagai fasilitas modern
                        untuk kenyamanan Anda, termasuk AC, tempat tidur yang nyaman, kamar mandi pribadi dengan shower,
                        TV layar datar, dan area dapur kecil.</p>
                    <p>Harga per malam: IDR 412.500</p>
                    <div class="row">
                    <p>The Rooms :</p>
                        <div class="col-md-4">
                            <img src="../../img/Hotels/rooms-furamax.jpeg" class="img-fluid"
                                alt="Kamar 1">
                        </div>
                        <div class="col-md-4">
                            <img src="../../img/Hotels/rooms2-furamax.jpeg" class="img-fluid"
                                alt="Kamar 2">
                        </div>
                        <button type="button" class="btn btn-primary btn-sm d-block mx-auto mt-2">Select Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal section untuk kamar suite 1 -->
    <div class="modal fade" id="detailKamarModal-suite1" tabindex="-1" aria-labelledby="detailKamarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-content-scrollable">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailKamarModalLabel">Detail Room Suite 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kamar di The Rooms Apartment Bali by ARM Hospitality dilengkapi dengan berbagai fasilitas modern
                        untuk kenyamanan Anda, termasuk AC, tempat tidur yang nyaman, kamar mandi pribadi dengan shower,
                        TV layar datar, dan area dapur kecil.</p>
                    <p>Harga per malam: IDR 12345678</p>
                    <div class="row">
                    <p>The Rooms :</p>
                        <div class="col-md-4">
                            <img src="../../img/Hotels/rooms-furamax.jpeg" class="img-fluid"
                                alt="Kamar 1">
                        </div>
                        <div class="col-md-4">
                            <img src="../../img/Hotels/rooms2-furamax.jpeg" class="img-fluid"
                                alt="Kamar 2">
                        </div>
                        <button type="button" class="btn btn-primary btn-sm d-block mx-auto mt-2">Select Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal untuk kmar suite 2 -->
    <div class="modal fade" id="detailKamarModal-suite2" tabindex="-1" aria-labelledby="detailKamarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-content-scrollable">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailKamarModalLabel">Detail Room Suite 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kamar di The Rooms Apartment Bali by ARM Hospitality dilengkapi dengan berbagai fasilitas modern
                        untuk kenyamanan Anda, termasuk AC, tempat tidur yang nyaman, kamar mandi pribadi dengan shower,
                        TV layar datar, dan area dapur kecil.</p>
                    <p>Harga per malam: IDR 412.500</p>
                    <div class="row">
                    <p>The Rooms :</p>
                        <div class="col-md-4">
                            <img src="../../img/Hotels/rooms-furamax.jpeg" class="img-fluid"
                                alt="Kamar 1">
                        </div>
                        <div class="col-md-4">
                            <img src="../../img/Hotels/rooms2-furamax.jpeg" class="img-fluid"
                                alt="Kamar 2">
                        </div>
                        <button type="button" class="btn btn-primary btn-sm d-block mx-auto mt-2">Select Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-white py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <img src="../../img/logo.jpg" alt="" class="img-fluid" style="height: 40px;">
            <span class="text-dark">©2024 - Harum</span>
            <div class="d-flex">
                <a href="#" class="text-dark mx-2">Tim Developer</a>
                <a href="#" class="text-dark mx-2">Kontak Kami</a>
                <a href="#" class="text-dark mx-2">About</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        document.getElementById('detailKamarBtn').addEventListener('click', function () {
            var detailKamarModal = new bootstrap.Modal(document.getElementById('detailKamarModal'), {
                keyboard: false
            });
            detailKamarModal.show();
        });
    </script>
</body>

</html>