<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAB RESEARCH REPOSITORY- Index</title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="assets/img/MABB.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
    /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
    #header {
        transition: all 0.5s;
        z-index: 997;
        padding: 15px 0;
        background: rgba(34, 197, 13);
    }

    #header .logo {
        font-size: 30px;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    #header .logo a {
        color: #fff;
    }

    #header .logo img {
        max-height: 40px;
    }

    /*--------------------------------------------------------------
# aWord  Section
--------------------------------------------------------------*/
    #BWord {
        width: 100%;
        height: 100vh;
        background: white;
    }

    #BWord .container {
        padding-top: 72px;
    }

    #BWord h3 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700px;
        line-height: 56px;
        color: #fff;
    }

    #BWord h4 {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 50px;
        font-size: 24px;
    }


    .custom-button {
        display: inline-block;
        padding: 20px 50px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        position: absolute;
        top: 20px;
        left: 30px;
    }

    .custom-button:hover {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;

    }
</style>
<script>
    function goToNextPage() {
        window.location.href = "author.php"; // Replace with the desired URL
    }
</script>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html"></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="search.php">Search</a></li>
                    <li><a class="nav-link scrollto" href="years.php">Year</a></li>
                    <li><a class="nav-link scrollto" href="group.php">Subject Area</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="aWord ">
            <div class="section-title">
                <h2>Author : 'G'</h2>
                <button class="custom-button" onclick="goToNextPage()" id="backButton">Back</button>
            </div>


            <?php

            include("connection.php");

            // Assuming you have already established a database connection

            // SQL query to select words starting with 'g' or 'G'
            $query = "SELECT * FROM pdf_files WHERE author LIKE 'G%'";

            // Execute the query
            $result = mysqli_query($conn, $query);

            // Check if the query was successful
            if ($result) {
            ?>
                <div class="col-sm-12 p-3"><br> <!--table frame-->
                    <div class="mt-4">
                        <div class="card-body">
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
                                    // Check if any rows are returned
                                    if (mysqli_num_rows($result) > 0) {


                                        while ($row = mysqli_fetch_assoc($result)) {

                                    ?>

                                            <tr><br>
                                                <td><?= $row['groupName']; ?></td>
                                                <td><?= $row['subgroup']; ?></td>
                                                <td><?= $row['title']; ?></td>
                                                <td><?= $row['author']; ?></td>
                                                <td><?= $row['years']; ?></td>
                                                <td><?= $row['source']; ?></td>
                                                <td>
                                                <div style="text-align: center;">

                                                    <a class="view-btn" href="view_pdf.php?id=<?= $row['id']; ?>" target="_blank">View</a>
                                                </div>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        // No matching words found
                                        echo "No rows with column values containing 'G' found.";
                                    }
                                } else {
                                    // Query execution failed

                                    echo "Error: " . mysqli_error($conn);
                                }

                                // Close the database connection
                                mysqli_close($conn);
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>