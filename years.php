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
# years  Section
--------------------------------------------------------------*/

    #years {
        width: 100%;
        height: 100vh;
        background: white;
        overflow-y: auto;

    }

    #years .container {
        padding-top: 72px;
    }

    #years h3 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700px;
        line-height: 56px;
        color: #fff;

    }

    #years h4 {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 50px;
        font-size: 24px;
    }

    .btn.btn-primary {
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
        border: 2px solid #000;
    }

    .btn.btn-primary:hover {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;
    }

    @media (max-width: 768px) {
        #backButton {
            display: none;
        }
    }

    .containerYears {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #22c50d;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        margin-top: 50px;
    }

    .form-group {
        margin-bottom: 30px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
    }

    .form-group select {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-weight: bold;
    }

    .form-group button {
        background-color: #fff;
        color: #000;
        border: none;
        padding: 8px 12px;
        border-radius: 3px;
        cursor: pointer;
        font-weight: bold;
    }
</style>
<script>
    function goToNextPage() {
        window.history.back();
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
                    <li><a class="nav-link scrollto" href="author.php">Author</a></li>
                    <li><a class="nav-link scrollto" href="group.php">Subject Area</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <main id="main">
        <section id="years">
            <div class="section-title">
                <h2>Year</h2>
                <button type="button" onclick="goToNextPage()" class="btn btn-primary" id="backButton">Back</button>
            </div>

            <div class="container containerYears">
                <h3>Year Filter</h3>
                <?php if (!isset($_POST['start_year']) && !isset($_POST['end_year'])) { ?>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="start_year">Select Start Year:</label>
                            <select name="start_year" id="start_year">
                                <?php
                                // Generate a dropdown list of years
                                $currentYear = date("Y");
                                for ($i = $currentYear; $i >= 1980; $i--) {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="end_year">Select End Year:</label>
                            <select name="end_year" id="end_year">
                                <?php
                                // Generate a dropdown list of years
                                $currentYear = date("Y");
                                for ($i = $currentYear; $i >= 1980; $i--) {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit">Filter</button>
                        </div>
                    </form>
                <?php } ?>
            </div>

            <?php
            // Function to retrieve the filtered results
            function getFilteredResults($startYear, $endYear, $conn)
            {
                $sql = "SELECT * FROM pdf_files WHERE years BETWEEN $startYear AND $endYear";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // echo '<h2>Filtered Results</h2>';
            ?>
                    <div class="col-sm-12 p-3 py-1"><!--table frame-->
                        <div class="mt-4">
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
                                        </thead>
                                        <tbody>
                                            <?php

                                            while ($row = $result->fetch_assoc()) {
                                                //     echo '<div>';
                                                //     echo '<h3>' . $row["author"] . '</h3>';
                                                //     echo '<p>Date: ' . $row["years"] . '</p>';
                                                //     echo '</div>';
                                                // 
                                            ?>

                                                <tr>
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
                                            echo '<br>' . '</t>';

                                            echo 'Apologies, the information you are seeking is currently unavailable.';
                                        }
                                    }


                                    // Check if the form was submitted
                                    if (isset($_POST['start_year']) && isset($_POST['end_year'])) {
                                        // Retrieve the selected start and end years from the form submission
                                        $startYear = $_POST['start_year'];
                                        $endYear = $_POST['end_year'];

                                        // Create a connection
                                        $conn = new mysqli("localhost", "root", "", "file");

                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        // Call the function to display the filtered results
                                        getFilteredResults($startYear, $endYear, $conn);

                                        // Close the database connection
                                        $conn->close();
                                    }
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