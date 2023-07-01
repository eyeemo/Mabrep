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
# group Section
--------------------------------------------------------------*/
    #group {
        width: 100%;
        height: 100vh;
        background: white;
    }

    #group .container {
        padding-top: 72px;
    }

    #group h3 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700px;
        line-height: 56px;
        color: #fff;

    }

    .highlight {
        background-color: yellow;
    }
</style>

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
        <section id="group">
            <div class="section-title">
                <h2>Socioeconomy</h2>
            </div>

            <?php
            include("connection.php");

            // Assuming you have already established a database connection

            // SQL query to select rows with subgroup 'Socioeconomy' and groupName 'solutions'
            $query = "SELECT * FROM pdf_files WHERE subgroup = 'Socioeconomy' AND groupName = 'solutions'";

            // Execute the query
            $result = mysqli_query($conn, $query);

            // Check if the query was successful
            if ($result) {
            ?>
                <div class="table-responsive">
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
                                                // Highlight the word 'socioeconomy'
                                                $subgroup = str_ireplace('Socioeconomy', '<span class="highlight">Socioeconomy</span>', $row['subgroup']);
                                                $groupName = str_ireplace('solutions', '<span class="highlight">solution</span>', $row['groupName']);

                                        ?>

                                                <tr><br>
                                                    <td><?= $groupName; ?></td>
                                                    <td><?= $subgroup; ?></td>
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
                                            // No matching rows found
                                            echo "No rows with subgroup 'Socioeconomy' found.";
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