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
  ======================================================== -->
</head>
<style>
    /*--------------------------------------------------------------
# aWord  Section
--------------------------------------------------------------*/
    #aWord {
        width: 100%;
        height: 80vh;
        background: #22c50d;
    }

    #aWord .container {
        padding-top: 72px;
    }

    #aWord h3 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700px;
        line-height: 56px;
        color: #fff;
    }

    #aWord h4 {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 50px;
        font-size: 24px;
    }

    /*--------------------------------------------------------------
# list  Section
--------------------------------------------------------------*/
    #list {
        width: 100%;
        height: 100vh;
        background: white;
    }

    #list .container {
        padding-top: 72px;
    }

    #list h3 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700px;
        line-height: 56px;
        color: #fff;
    }

    #list h4 {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 50px;
        font-size: 24px;
    }

    h5 {
        margin: 0 0 10px 0;
        font-size: 40px;
        font-weight: 500px;
        line-height: 56px;
        color: #fff;
    }

    /*--------------------------------------------------------------
    button untuk search dan button search  
--------------------------------------------------------------*/

    #searchInput {
        width: 100%;
        border: 2px solid #000;
        font-size: 18px;
    }

    input {
        width: 800px;
        height: 50px;
        border-radius: 100vh 0 150vh 100vh;
        border: none;
        outline: none;
        padding: 0 10px;
        font-weight: bold;
        font-size: 50px;
    }

    #buttonSearch {
        background-color: #000;
        color: #fff;
        border: 1px solid #000;
        font-weight: bold;
    }


    #buttonSearch:hover {
        background-color: #fff;
        color: #000;
        border: 1px solid #000;
    }

    /*--------------------------------------------------------------
# Popup successful msg 
--------------------------------------------------------------*/
    .popup {
        display: none;
        width: 400px;
        background: #ccc;
        border-radius: 6px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 0 30px 30px;
        color: #000000;

        position: absolute;
        z-index: 9999;
        /* Set a higher z-index value */
        /* Add other necessary styles */
    }

    .popup h2 {
        font-size: 38px;
        font-weight: 500;
        margin: 30px 0 10px;
        color: #000000;
    }

    .popup img {
        width: 100px;
        margin-top: -50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    #button1 {
        position: relative;
        z-index: 1;
        /* Set a lower z-index value */
        /* Add other necessary styles */
    }
</style>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html"></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="admin.php">Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="aWord"><br>

        </section>

        <section id="list"><br>
            <div class="section-title">
                <h2>LIST ARTICLE</h2>
                <!-- my-3 m untuk margin, p untuk padding, y untuk both atas bawah  mx-melambangkan both kiri kanan-->
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col col-md-8 py-5">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" aria-label="Search" id="searchInput" name="search" autocomplete="off" value="<?php
                                                                                                                                                    if (isset($_GET['search'])) {
                                                                                                                                                        echo $_GET['search'];
                                                                                                                                                    }
                                                                                                                                                    ?>" placeholder="Type specific title">
                        <button class="btn btn-outline-success" id="buttonSearch" type="submit">Search</button>
                    </form>
                </div>
            </div>

        </section>











    </main>

</body>

</html>