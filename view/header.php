<?php
include '../server/session-file.php';

if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
} elseif ($userLoggedIn == 'admin') {
    header("Location: admin_home.php");
} else {
    header("Location: register.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Michi, Arvin, and Lhil">

    <title>CodeSphere</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/templatemo-festava-live.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="profile.css"> -->

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- JAVASCRIPT FILES -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/click-scroll.js"></script>
    <script src="../js/custom.js"></script>

   <main class="bg-black">
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-heart custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to Code Sphere</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>
   </main>
        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    Code Sphere
                    <img src="../images/logo/logo-white.png" alt="" width="30px">
                </a>

                <!-- <div class="search d-flex align-items-center">
    <input type="text" class="form-control me-2" placeholder="Search">
    <button type="button" class="btn btn-danger">Search</button>
</div> -->

                <!-- <a href="login.php" class="btn custom-btn d-lg-none ms-auto me-4">Sign In</a> -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="search.php">Search</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="profile.php">Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="notifrication.php">Notifications</a>
                        </li>
                        <li>
                            <a href="login.php" class="btn custom-btn d-lg-block d-none">Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
       