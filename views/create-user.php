<?php
require_once __DIR__ . '/../models/User.php';
use models\User;

if (isset($_POST['submit'])) {
    $data = [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'gender' => $_POST['gender'],
        'age' => $_POST['age'],
        'weight' => $_POST['weight'],
    ];

    User::create($data);

    header("Location: list-user.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah User - Project01</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../public/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="dashboard.php">Praktikum06</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" />
            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Main Menu</div>
                    <a class="nav-link" href="list-user.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        User
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Anggia Dwi Hikmah
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 mt-4">
                <h1 class="mb-4">Tambah User</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-user-plus me-1"></i>
                        Form Tambah Data User
                    </div>
                    <div class="card-body">
                        <form action="create-user.php" method="POST">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" id="male" value="Laki-laki" checked>
                                    <label for="male" class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="gender" id="female" value="Perempuan">
                                    <label for="female" class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" min="0" required>
                            </div>
                            <div class="mb-3">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="number" class="form-control" id="weight" name="weight" min="0" required>
                            </div>
                            <a href="list-user.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
                            <button type="submit" class="btn btn-primary" name="submit"> Save <i class="fas fa-save"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex justify-content-between small">
                    <div class="text-muted">Copyright &copy; Praktikum06 <?= date('Y') ?></div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../public/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../public/js/datatables-simple-demo.js"></script>
</body>
</html>
