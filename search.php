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
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />

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
# category 
--------------------------------------------------------------*/
    .choose {
        display: flex;
        height: 100%;
        display: flex;
        justify-content: left;
        align-items: 50;
        padding-bottom: 20px;
        position: relative;
        top: 250px;
        left: 320px;
    }

    .choose button {
        background-color: #149ddd;
        color: #fff;
        border: none;
        margin-right: 30px;
        /* Add margin between buttons */
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.5s ease;
        width: 290px;
        /* Set desired width */
        height: 70px;
        /* Set desired height */
    }

    .choose button:last-child {
        margin-right: 20;
        /* Remove margin from last button */
    }

    .choose button:hover {
        background-color: #0056b3;
    }

    /*--------------------------------------------------------------
    button untuk search dan button search  
--------------------------------------------------------------*/

    #searchInput {
        width: 100%;
        border: 2px solid #000;
        font-size: 18px;
        justify-content: center;
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

    .highlight {
        background-color: yellow;
    }
</style>
<script>
    function showTable() {
        // Get the table element by its ID
        var table = document.getElementById("myTable");

        // Check if the table is currently hidden
        if (table.style.display === "none") {
            // Show the table
            table.style.display = "table";
        }
    }
</script>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="author.php">Author Name</a></li>
                    <li><a class="nav-link scrollto" href="years.php">Year</a></li>
                    <li><a class="nav-link scrollto" href="group.php">Subject Area</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <section id="aWord"><br>
            <div class="section-title">
                <h2>Search</h2>
            </div>
        </section>

        <div class="section-title">
            <!-- Database search -->
            <div class="row d-flex justify-content-center">
                <!-- my-3 m untuk margin, p untuk padding, y untuk both atas bawah  mx-melambangkan both kiri kanan-->
                <div class="col col-md-8 py-2">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" aria-label="Search" id="searchInput" name="search" autocomplete="off" required value="<?php $showTable = false;
                                                                                                                                                                if (isset($_GET['search'])) {
                                                                                                                                                                    echo $_GET['search'];
                                                                                                                                                                    $showTable = true;
                                                                                                                                                                } ?>" placeholder="Type to Search">
                        <button onclick="showTable()" class="btn btn-outline-success" id="buttonSearch" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-sm-12 p-3 py-5"> <!--table frame-->
            <div class="mt-4">
                <?php
                $con = mysqli_connect("localhost", "root", "", "file");
                if (isset($_GET['search'])) {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM pdf_files WHERE CONCAT (file, groupName, subgroup, title, author, years, source) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($con, $query);

                ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="myTable" style="display: flex-block;"> <!--table hide p/s ada dekat css-->
                                <thead>
                                    <tr>
                                        <th class="text-center">GROUP</th>
                                        <th class="text-center">SUB-GROUP</th>
                                        <th class="text-center">TITLE</th>
                                        <th class="text-center">AUTHOR</th>
                                        <th class="text-center">YEARS</th>
                                        <th class="text-center">SOURCE</th>
                                        <th class="text-center">ABSTRACT/SUMMARY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items) {
                                            $groupName = $items['groupName'];
                                            $subgroup = $items['subgroup'];
                                            $title = $items['title'];
                                            $author = $items['author'];
                                            $years = $items['years'];
                                            $source = $items['source'];

                                            $groupName = str_ireplace($filtervalues, '<span class="highlight">' . $filtervalues . '</span>', $groupName);
                                            $subgroup = str_ireplace($filtervalues, '<span class="highlight">' . $filtervalues . '</span>', $subgroup);
                                            $title = str_ireplace($filtervalues, '<span class="highlight">' . $filtervalues . '</span>', $title);
                                            $author = str_ireplace($filtervalues, '<span class="highlight">' . $filtervalues . '</span>', $author);
                                            $years = str_ireplace($filtervalues, '<span class="highlight">' . $filtervalues . '</span>', $years);
                                            $source = str_ireplace($filtervalues, '<span class="highlight">' . $filtervalues . '</span>', $source);
                                    ?>
                                            <tr>
                                                <td><?= $groupName; ?></td>
                                                <td><?= $subgroup; ?></td>
                                                <td><?= $title; ?></td>
                                                <td><?= $author; ?></td>
                                                <td><?= $years; ?></td>
                                                <td><?= $source; ?></td>
                                                <td>
                                                    <div style="text-align: center;">
                                                    <a class="view-btn" href="view_pdf.php?id=<?= $items['id']; ?>" target="_blank">View</a>

                                                        <!-- <a href="view_pdf.php?id=<?= $items['id']; ?>" target="_blank" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg> View
                                                        </a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>




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
</body>

</html>
