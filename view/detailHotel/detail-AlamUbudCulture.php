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
                        <li><a class="dropdown-item" href="../index.php">Log Out</a></li>
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
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="../../img/Hotels/detail-alamubudculture.jpeg" class="img-fluid"
                            alt="The Rooms Apartment Bali by ARM Hospitality">
                    </div>
                    <div class="col-md-6 hotel-content">
                        <div class="hotel-title text-primary fw-bold fs-3">Alam Ubud Culture, Environment Villas &
                            Residences</div>
                        <div class="card-body">
                            <div class="hotel-rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p>
                            This hotel is the perfect choice for couples seeking a romantic getaway or a honeymoon
                            retreat. Enjoy the most memorable nights with your loved one by staying at Alam Ubud
                            Culture, Environment Villas & Residences.
                            Spa treatment is one of the main features of the hotel. Pamper yourself with the relaxing
                            treatment that rejuvenates you.
                            If you plan to have a long-term stay, staying at Alam Ubud Culture, Environment Villas &
                            Residences is the right choice for you. Providing wide range of facilities and great service
                            quality, this accommodation certainly makes you feel at home.
                        </p>
                        <a class="btn btn-primary w-100" href="#" role="button">SELECT ROOM</a>
                    </div>
                </div>
                <hr><br>
                <div class="row">
                    <h2 class="text-primary mb-5 text-center fw-bold">FACILITIES</h2>
                    <div class="col-md-4 mb-5">
                        <h5><i class="fas fa-building"></i> Public Facilities</h5>
                        <ul>
                            <li>Parking</li>
                            <li>Coffee shop</li>
                            <li>Restaurant</li>
                            <li>Room service</li>
                            <li>Safety deposit box</li>
                            <li>WiFi in public area</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5><i class="fas fa-concierge-bell"></i> Hotel Services</h5>
                        <ul>
                            <li>Laundry service</li>
                            <li>Luggage storage</li>
                            <li>Tours</li>
                        </ul>
                        <h5 class="mt-4"><i class="fas fa-briefcase"></i> Business Facilities</h5>
                        <ul>
                            <li>Meeting facilities</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5><i class="fas fa-cocktail"></i> Food and Drinks</h5>
                        <ul>
                            <li>Bar</li>
                        </ul>
                        <h5 class="mt-4"><i class="fas fa-smoking"></i> General</h5>
                        <ul>
                            <li>Smoking area</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <h5><i class="fas fa-snowboarding"></i> Things to Do</h5>
                        <ul>
                            <li>Garden</li>
                            <li>Massage</li>
                            <li>Outdoor pool</li>
                            <li>Spa</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5><i class="fas fa-car"></i> Transportation</h5>
                        <ul>
                            <li>Airport transfer</li>
                            <li>Bicycle rental</li>
                            <li>Car rental</li>
                            <li>Valet parking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <hr><br>

        <!-- Map Section -->
        <section class="location py-3">
            <div class="container">
                <div class="row">
                    <h3 class="text-primary"><i class="fa fa-map-marker" aria-hidden="true"></i> LOCATION</h3>
                    <div class="col-5">
                        <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.436026069195!2d115.27935287359281!3d-8.456908485482144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd223ffffe05a87%3A0x25df276e240ca261!2sAlam%20Ubud%20Culture%20Villas%20%26%20Residences!5e0!3m2!1sid!2sid!4v1719413791294!5m2!1sid!2sid"
                            width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div>
                                    <h6>Nearby Places</h6>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-landmark"></i> Tegallalang Rice Terrace</span>
                                            <span>2.63 km</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-spa"></i> The Yoga Barn</span>
                                            <span>7.35 km</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <h6>Popular in the Area</h6>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-landmark"></i> Tegallalang Rice Terrace</span>
                                            <span>2.63 km</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

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
</body>

</html>