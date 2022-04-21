<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/styles1.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>public/img/logo.png">

    <title><?php echo $judul; ?></title>
</head>

<style>
    * {
        font-family: montserrat;
    }

    .navbar-nav a {
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .navbar-light .navbar-brand {
        color: #000;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 2;
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: #000;
    }

    .navbar-light .navbar-nav .navbar-link {
        color: #000;

    }

    @media only screen and (max-width: 767px) {
        .navbar-nav {
            text-align: center;
        }
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">E-Health</span> Sumber Kasih</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            about
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#about"><i class="bi bi-heart-pulse-fill"></i> About Us</a></li>
                            <li><a class="dropdown-item" href="#layanan"><i class="bi bi-headset"></i> Layanan Tersedia</a></li>
                            <li><a class="dropdown-item" href="#bantuan"><i class="bi bi-envelope-open-fill"></i> Contac</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin"><i class="bi bi-person-fill"></i>Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <br>
    <br>
    <br>