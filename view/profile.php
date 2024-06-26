  <?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/UTSwebC/css/style.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="profile-image-container">
                            <i class="fa-solid fa-user fa-2xl"></i> 
                            </div>
                            <div class="ms-3">
                                <h6> <?= $_SESSION["username"] ?> </h6>
                                <p class="text-muted small"><?= $_SESSION["email"] ?></p>
                            </div>
                        </div>
                        <p class="text-success mb-0"><i class="fas fa-check-circle"></i> Sudah Login</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush mt-3 rounded-2">
                    <li class="list-group-item active"><a href="#" class="text-decoration-none text-white"><i class="fas fa-cog"></i> Settings</a></li>
                    <li class="list-group-item"><a href="lastseen.php" class="text-decoration-none text-dark"><i class="fas fa-eye"></i> Terakhir Dilihat</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Settings</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Ubah Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lastseen.php">Terakhir Dilihat</a>
                            </li>
                        </ul>

                            <div class="card-body">
                              <form>
                                <div class="mb-3">
                                  <label for="firstName" class="form-label">Username</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="firstName"
                                    value=""
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="lastName" class="form-label">Email</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="lastName"
                                    value=""
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="firstName" class="form-label"
                                    >Password Lama</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="passwordl"
                                    value=""
                                  />
                                </div>
                                <div class="mb-3">
                                  <label for="firstName" class="form-label"
                                    >Password Baru</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="passwordb"
                                    value=""
                                  />
                                </div>
                                <button type="submit" class="btn btn-secondary">
                                  Perbarui Informasi Pribadi
                                </button>
                                <a href="#" class="btn btn-danger">Hapus Akun saya</a>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
