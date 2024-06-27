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
                        <img src="../../img/Hotels/detail-apurva.jpeg" class="img-fluid"
                            alt="The Rooms Apartment Bali by ARM Hospitality">
                    </div>
                    <div class="col-md-6 hotel-content">
                        <div class="hotel-title text-primary fw-bold fs-2">The Apurva Kempinski Bali</div>
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
                            The Apurva Kempinski Bali is the right choice for those of you who want to spend time with
                            various luxurious facilities. Enjoy the best quality service and a memorable experience
                            while staying at this accommodation.
                            Spa services are the number one facility in this accommodation. Spend your time relaxing and
                            pampering yourself.
                            The Apurva Kempinski Bali has all the business support facilities for you and your
                            colleagues.
                            The Apurva Kempinski Bali is the right place to stay for those of you on holiday with your
                            family. Enjoy all the entertainment facilities for you and your family.
                        </p>
                        <a class="btn btn-primary w-100" href="#" role="button">SELECT ROOM</a>
                    </div>
                </div>
                <hr><br>
                <div class="row">
                    <h2 class="text-primary mb-5 text-center fw-bold">FACILITIES</h2>
                    <div class="col-md-4 mb-5">
                        <h5><i class="fas fa-sun"></i> Other Activities</h5>
                        <ul>
                            <li>Beach tent</li>
                            <li>Beach sun loungers</li>
                            <li>Beach towel</li>
                            <li>Beach umbrella</li>
                            <li>Children's play area</li>
                            <li>Fitness center</li>
                            <li>Park</li>
                            <li>Massage services</li>
                            <li>Outdoor swimming pool</li>
                            <li>Poolside sun loungers</li>
                            <li>Spa</li>
                            <li>Sun loungers</li>
                            <li>Swimming pool slide</li>
                        </ul>
                    </div>
                    <!-- Hotel Services -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-concierge-bell"></i> Hotel Services</h5>
                        <ul>
                            <li>Bellboy</li>
                            <li>Welcome drink</li>
                            <li>Concierge/guest services</li>
                            <li>Gatekeeper</li>
                            <li>Receptionist</li>
                            <li>24 hour reception</li>
                            <li>24 hour security</li>
                            <li>Laundry</li>
                            <li>Luggage storage</li>
                            <li>Medical services</li>
                            <li>Multilingual staff</li>
                            <li>Porter</li>
                            <li>Tour services</li>
                            <li>Marriage facilities</li>
                        </ul>
                    </div>
                    <!-- Food and Drink -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-utensils"></i> Food and Drink</h5>
                        <ul>
                            <li>Air-conditioned restaurant</li>
                            <li>Dinner from the menu</li>
                            <li>Lunch from the menu</li>
                            <li>Bar</li>
                            <li>Beach bar</li>
                            <li>Breakfast</li>
                            <li>Buffet breakfast</li>
                            <li>Expensive breakfast</li>
                            <li>No alcoholic drinks</li>
                            <li>Set menu dinner</li>
                            <li>Lunch menu</li>
                            <li>Winery</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- Public Facility -->
                    <div class="col-md-4 mb-5 facility-section">
                        <h5><i class="fas fa-building"></i> Public Facility</h5>
                        <ul>
                            <li>Parking area</li>
                            <li>Coffee/tea in the lobby</li>
                            <li>Lift</li>
                            <li>Restaurant</li>
                            <li>Restaurant for breakfast</li>
                            <li>Restaurant for dinner</li>
                            <li>Restaurant for lunch</li>
                            <li>Safe</li>
                            <li>WiFi in public areas</li>
                        </ul>
                    </div>
                    <!-- Room Facilities -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-bed"></i> Room Facilities</h5>
                        <ul>
                            <li>Bathrobe</li>
                            <li>Bathtub</li>
                            <li>Table</li>
                            <li>Hairdryer</li>
                            <li>Room safe</li>
                            <li>Separate shower and bath</li>
                            <li>Shower</li>
                            <li>TV</li>
                        </ul>
                    </div>
                    <!-- General -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-cogs"></i> General</h5>
                        <ul>
                            <li>AC</li>
                            <li>Classroom</li>
                            <li>Banquet</li>
                            <li>Smoke-free area</li>
                            <li>Swimming pool</li>
                            <li>Terrace</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- Business Facilities -->
                    <div class="col-md-4 mb-5 facility-section">
                        <h5><i class="fas fa-briefcase"></i> Business Facilities</h5>
                        <ul>
                            <li>Business facilities</li>
                            <li>Meeting room</li>
                            <li>Meeting facilities</li>
                            <li>Projector</li>
                        </ul>
                    </div>
                    <!-- Accessibility -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-wheelchair"></i> Accessibility</h5>
                        <ul>
                            <li>Toilet for disabled people</li>
                            <li>Roads for the disabled</li>
                            <li>Location is easy to access</li>
                            <li>Accessible for people with disabilities</li>
                        </ul>
                    </div>
                    <!-- Sports & Recreation -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-basketball-ball"></i> Sports & Recreation</h5>
                        <ul>
                            <li>Beach volleyball</li>
                            <li>Kano</li>
                            <li>Fitness center</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- Family Friendly Facilities -->
                    <div class="col-md-4 mb-5 facility-section">
                        <h5><i class="fas fa-child"></i> Family Friendly Facilities</h5>
                        <ul>
                            <li>Kids club</li>
                            <li>Children's swimming pool</li>
                        </ul>
                    </div>
                    <!-- Children and Pets -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-paw"></i> Children and Pets</h5>
                        <ul>
                            <li>Childcare</li>
                            <li>CRIBS</li>
                        </ul>
                    </div>
                    <!-- Transportation -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-shuttle-van"></i> Transportation</h5>
                        <ul>
                            <li>Transportation to shopping center</li>
                            <li>Valet parking</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- Connectivity -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-wifi"></i> Connectivity</h5>
                        <ul>
                            <li>Free WIFI</li>
                        </ul>
                    </div>
                    <!-- Nearby Facilities -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-map-marker-alt"></i> Nearby Facilities</h5>
                        <ul>
                            <li>ATM/Bank</li>
                            <li>Shop</li>
                        </ul>
                    </div>
                    <!-- Shuttle Service -->
                    <div class="col-md-4 facility-section">
                        <h5><i class="fas fa-bus"></i> Shuttle Service</h5>
                        <ul>
                            <li>Airport shuttle is charged</li>
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
                    <h3 class="text-primary fw-bold"><i class="fa fa-map-marker" aria-hidden="true"></i> LOCATION</h3>
                    <div class="col-5">
                        <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.5470990034173!2d115.21300307360009!3d-8.828546490352572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd25cc0e01a2dfb%3A0x486d1b655b87ed9c!2sThe%20Apurva%20Kempinski%20Bali!5e0!3m2!1sid!2sid!4v1719387900596!5m2!1sid!2sid"
                            width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> Strategic Location</h5>
                                <p class="card-text"><i class="fas fa-map-pin"></i> Near Bali Collection Nusa Dua</p>
                                <div>
                                    <h6>Around the Property</h6>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-landmark"></i> Pura Geger</span>
                                            <span>1.33 km</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-briefcase"></i> Bali International Convention
                                                Center</span>
                                            <span>3.90 km</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <h6>Popular in This Area</h6>
                                    <ul class="list-unstyled">
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-umbrella-beach"></i> Menglat Beach</span>
                                            <span>2.89 km</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <span><i class="fas fa-landmark"></i> Pura Geger</span>
                                            <span>1.33 km</span>
                                        </li>
                                    </ul>
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