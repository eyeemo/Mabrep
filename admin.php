<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['name'])) {
    header("Location: adminPage.php");
    exit();
}
$errorLogin = false;
$errorMsg = "Invalid username or password";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MAB RESEARCH REPOSITORY- Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Favicons -->
    <link href="assets/img/MABB.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
<-- ======================================================== -->
</head>
<style>

    #hero h1 {
        justify-content: center;
        top: 20px;
        font-size: 39px;
        color: #000;
        text-align: center;
    }


    img {
        position: center;
        width: 100%;
        height: 40%;
        padding-bottom: 20px;

    }

    input {
        font-weight: bold;
    }

    .error-message {
        color: #ff0000;
        font-size: 14px;
        margin-top: 5px;
    }

    form {
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 600px;
        margin: auto;
        padding-bottom: 2px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 20px;
        border: 1px solid black;
        border-radius: 5px;
        background-color: #fff;
    }

    label {
        width: 100%;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
        color: #000;
    }

    input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #000000;
        background-color: #f2f2f2;
        font-size: 16px;
        margin-bottom: 20px;
    }

    input[type="submit"] {
        width: 100%;
        font-weight: bold;
        background-color: #000;
        color: #fff;
        border: 2px solid #000;
        cursor: pointer;
        font-size: 18px;
        padding: 10px 30px;
        border-radius: 5px;
    }

    input[type="submit"]:hover {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;
    }

    @media only screen and (max-width: 700px) {
        #hero {
        overflow-y: auto;
        }

        form {
            flex-direction: column;
        }
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html"></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto active" href="admin.php">Admin</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <br>
        <h1>Admin Login</h1>
        <div class="col-md-12">
            <form method="post">
                <div style="text-align: center;">
                    <img src="assets/img/smallMab.png" alt="MAB Icon">
                </div>
                <label for="name">Username</label>
                <input type="text" id="name" name="name" required autocomplete="off">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="off">
                <input type="submit" name="login" value="Log In">

                <?php
                include("connection.php");

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];
                    $pass = $_POST['password'];
                    $sql = "SELECT userName, passwords FROM admins";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        // session_start();
                        while ($row = $result->fetch_assoc()) {
                            if ($row['userName'] == $name && $row['passwords'] == $pass) {
                                $_SESSION['name'] = $name;
                                echo "<script>window.location.href='adminPage.php'</script>";
                            }
                        }
                        $errorLogin = true;
                    }
                    $conn->close();
                }
                ?>
                <div class="error-message">
                    <?php
                    if ($errorLogin)
                        echo $errorMsg;
                    ?>
                </div>
            </form>
        </div>

    </section><!-- End Hero -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>