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

    <style>
        body {
            background: rgba(34, 197, 13);
            margin-top: 50px;
            overflow: hidden; /* Prevent scrolling */
        }

        h5 {
            font-family: "Arial", sans-serif;
            font-size: 20px;
            color: #333333;
            letter-spacing: 2px;
            text-align: justify;
            margin-bottom: 20px;
            font-weight: bold;
            margin-top: 45px;
        }

        h6 {
            font-family: "Arial", sans-serif;
            font-size: 25px;
            font-weight: bold;
            color: #333333;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 5px;
        }


        /*--------------------------------------------------------------
# category 
--------------------------------------------------------------*/
        .choose {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 45px;
            position: relative;
        }

        .choose button {
            background-color: #fff;
            color: #000;
            font-weight: bold;
            border: none;
            margin-right: 20px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.5s ease;
            height: 120px;
            width: 15%;
        }

        @media (max-width: 768px) {
            body {
                overflow-y: auto;
            }

            .choose {
                flex-wrap: wrap;
                top: 0;
            }

            .choose button {
                margin: 5px;
                width: 100%;
            }
        }

        .choose button:last-child {
            margin-right: 0;
        }

        .choose button:hover {
            background-color: #000;
            color: #fff;
            border: 2px solid #fff;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            body {
                overflow-y: auto;
            }

            .choose button {
                height: 80px;
            }
        }

        @media (max-width: 576px) {
            body {
                overflow-y: auto;
            }

            .choose {
                padding-bottom: 10px;
                top: 0;
            }

            .choose button {
                margin: 5px;
                width: 100%;
                font-size: 16px;
                height: 60px;
            }
        }

        .btn.btn-secondary.btn-lg {
            display: inline-block;
            padding: 20px 50px;
            /*kiri tinggi,kanan lebar*/
            background-color: #fff;
            color: #000;
            font-weight: bold;
            border-radius: 5px;
            margin: 20px;

            border: 1px solid #000;
        }

        .btn.btn-secondary.btn-lg:hover {
            background-color: #000;
            color: #fff;
            border: 1px solid #fff;
        }

        .same-size {
            width: 200px;
            height: 100%;
        }
    </style>
</head>
<script>
    // increment visitor count
    var count = 0;

    function updateCounter() {
        count++;
        document.getElementById("counter").innerHTML = count;
    }

    // update counter on page load
    window.onload = function() {
        updateCounter();
    };
</script>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html"></a></h1>
            <nav id="navbar" class="navbar">
                <ul>

                    <li><a class="nav-link scrollto" href="admin.php">Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <main id="main">
        <section id="search">
            <div class="container">
                <div class="row" style="margin-left: 60px;">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h6>MALAYSIAN ASSOCIATION FOR THE BLIND</h6>
                        <h5>The MAB Repository System (MABRep) is a digital repository system of bibliographic information on documents and scholarly work about the Blind and Visually Impaired (BVI). The MABRep covers various subject areas and disciplines. The documents include journal articles, book chapters, reports, and conference papers.</h5>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/smallMab.png" class="img-fluid animated" alt="">
                        <img src="assets/img/smallUthm.png" class="img-fluid animated" alt="" style="margin-top: 10px;">
                    </div>
                </div>
                <!-- <p>Visitors: <span id="counter"></span></p> -->
            </div>
    <br><br>
            <!-- ======= search Section ======= -->
            <div class="choose">
                
                <button id="button1" class="btn btn-secondary btn-lg same-size">Search</button>
                <button id="button2" class="btn btn-secondary btn-lg same-size">Author Name</button>
                <button id="button3" class="btn btn-secondary btn-lg same-size">Year</button>
                <button id="button4" class="btn btn-secondary btn-lg same-size">Subject Area</button>
            </div>
        </section>



    </main>
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

    <script>
        document.getElementById("button1").addEventListener("click", function() {
            // Navigate to the next page (advance search)
            window.location.href = "search.php";
        });

        document.getElementById("button2").addEventListener("click", function() {
            // Navigate to the next page (author name)
            window.location.href = "author.php";
        });

        document.getElementById("button3").addEventListener("click", function() {
            // Navigate to the next page (years)
            window.location.href = "years.php";
        });

        document.getElementById("button4").addEventListener("click", function() {
            // Navigate to the next page (group)
            window.location.href = "group.php"; //group.php sama dengan international.php
        });
    </script>

</body>

</html>