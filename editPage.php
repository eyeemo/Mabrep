<?php
session_start();
ob_start(); // Start output buffering

include("connection.php");
//checkk if user is not logged in
if(!isset($_SESSION['name'])) {
    header("Location: admin.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the PDF file details from the database based on the provided 'id'
    $sql = "SELECT * FROM pdf_files WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>MAB Admin</title>
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
            <script defer src="assets/js/main.js"></script>


        </head>
        <style>
            /*--------------------------------------------------------------
# category 
--------------------------------------------------------------*/
            .choose {
                display: flex;
                height: 100%;
                justify-content: left;
                align-items: 50;
                padding-bottom: 20px;
                position: relative;
                top: 150px;
                left: 360px;
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
# Form Add Journal 
--------------------------------------------------------------*/
            h1 {
                position: relative;
                top: 10%;
                left: 42%;
                font-weight: 900;
                font-size: 35px;
            }

            .error-message {
                color: #ff0000;
                font-size: 16px;
                margin-top: 5px;
            }

            label {
                color: #000;
                font-size: 20px;
                width: 100%;
                margin-bottom: 10px;
                font-weight: bold;
            }


            input,
            textarea {
                font-weight: bold;
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #000000;
                background-color: #f2f2f2;
                font-size: 18px;
                margin-bottom: 20px;
            }

            input[type="cancel"] {
                justify-items: center;
                width: 100%;
                font-weight: bold;
                margin-top: 20px;
                background-color: #fff;
                color: #000;
                border: 2px solid #fff;
                cursor: pointer;
                font-size: 18px;
                padding: 10px 30px;
                border-radius: 5px;
            }

            input[type="cancel"]:hover {
                background-color: #8B0000;
                color: #fff;
                border: 2px solid #fff;
            }

            input[type="submit"] {
                justify-items: center;
                width: 100%;
                font-weight: bold;
                margin-top: 20px;
                background-color: #fff;
                color: #000;
                border: 2px solid #fff;
                cursor: pointer;
                font-size: 18px;
                padding: 10px 30px;
                border-radius: 5px;
            }

            input[type="submit"]:hover {
                background-color: #000;
                color: #fff;
                border: 2px solid #fff;
            }

            @media only screen and (max-width: 720px) and (orientation: landscape) {}

            .container2 {
                margin-left: 7rem;
            }

            .container3 {
                position: fixed;
                top: 18%;
                left: 50%;
            }

            .container4 {
                position: absolute;
                bottom: 10%;
                left: 42%;
            }

            .container5 {
                position: absolute;
                left: 25%;
                bottom: 195px;
            }

            .container6 {
                position: fixed;
                top: 37%;
                left: 50%;
            }



            .label1 {
                color: #fff;
                font-weight: bold;
                margin-bottom: 8px;
                margin-left: 1rem;
                font-size: 150%;
            }

            .label2 {
                color: #fff;
                font-weight: bold;
                margin-top: 9px;
                margin-bottom: 6px;
                margin-left: 1rem;
                font-size: 150%;
            }

            .input1 {
                width: 44%;
                padding: 5px;
                padding-left: 1%;
                border-radius: 5px;
                border: 1px solid #000000;
                background-color: #f2f2f2;
                font-size: 18px;
                margin-bottom: 20px;
            }

            .input2 {
                width: 120%;
                padding: 5px;
                padding-left: 2%;
                border-radius: 5px;
                border: 1px solid #000000;
                background-color: #f2f2f2;
                font-size: 18px;
                margin-bottom: 20px;
            }

            .select1 {
                padding-left: 5%;
                font-weight: bold;
                width: 15%;
                padding: 8px;
                border-radius: 5px;
                border: 1px solid #000000;
                background-color: #f2f2f2;
                font-size: 18px;
                margin-bottom: 20px;
            }

            .select2 {
                position: relative;
                padding-left: 5%;
                font-weight: bold;
                width: 44%;
                padding: 8px;
                border-radius: 5px;
                border: 1px solid #000000;
                background-color: #f2f2f2;
                font-size: 18px;
                margin-bottom: 20px;

            }

            /* Custom Button Style */
            .choose-file-button {
                display: inline-block;
                padding: 8px 20px;
                color: #000;
                background-color: #fff;
                border: 2px solid #fff;
                cursor: pointer;
            }

            .choose-file-button:hover {
                background-color: #000;
                color: #fff;
                border: 2px solid #fff;
            }

            .choose-file-button:active {
                background-color: #3d8b3d;
            }

            .selected-file {
                font-size: 18px;
                color: #000;
                margin-top: 10px;
                font-weight: bold;
            }

            section {
                position: absolute;
            }

            /* Responsive styles */
            @media (max-width: 991px) {
                section {
                    overflow-y: scroll;
                }

                .container2 {
                    margin-left: 0;
                }

                .container3 {
                    top: initial;
                    left: initial;
                    position: relative;
                    margin-top: 20px;
                }

                .container4 {
                    bottom: initial;
                    left: initial;
                    position: relative;
                    margin-top: 20px;
                }

                .container5 {
                    position: relative;
                    left: initial;
                    bottom: initial;
                    margin-top: 20px;
                }

                .container6 {
                    position: fixed;
                    top: 37%;
                    left: 50%;
                }

                .input1,
                .input2,
                .select1,
                .select2,
                .textarea1 {
                    width: 100%;
                }
            }

            @media (max-width: 768px) {
                section {
                    overflow-y: scroll;
                }

                h1.title {
                    font-size: 28px;
                    text-align: center;
                    margin-top: 20px;
                    left: 20px;
                }

                .container3,
                .container4,
                .container5 {
                    position: relative;
                    left: initial;
                    bottom: initial;
                    margin-top: 20px;
                }
            }

            @media (max-width: 576px) {
                section {
                    overflow-y: scroll;
                }

                .choose {
                    display: block;
                    text-align: center;
                }

                .choose button {
                    width: 100%;
                    margin-bottom: 10px;
                }

                .nav-icon {
                    left: 1rem;
                }

                .label1,
                .label2 {
                    font-size: 130%;
                }

                .input1,
                .input2,
                .select1,
                .select2,
                .textarea1 {
                    font-size: 14px;
                }
            }

            /*--------------------------------------------------------------
# Popup error msg 
--------------------------------------------------------------*/
            .popup {
                display: none;
                width: 400px;
                background: #000;
                border-radius: 6px;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                padding: 0 30px 30px;
                color: #fff;
                font-size: 18px;

                position: absolute;
                z-index: 9999;
                /* Set a higher z-index value */
                /* Add other necessary styles */
            }

            .popup h2 {
                font-size: 38px;
                font-weight: 500;
                margin: 30px 0 10px;
                color: #fff;
            }

            .popup img {
                width: 100px;
                margin-top: -50px;
                border-radius: 50%;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 9998;
            }

            .closePopupBtn {
                justify-items: center;
                width: 40%;
                font-weight: bold;
                margin-top: 36px;
                background-color: #fff;
                color: #000;
                border: 2px solid #fff;
                cursor: pointer;
                font-size: 18px;
                padding: 10px 30px;
                border-radius: 5px;
            }

            .closePopupBtn:hover {
                background-color: #8B0000;
                color: #fff;
                border: 2px solid #fff;
            }
        </style>
        <script>
            // Function to update the selected file information
            function updateSelectedFile() {
                var fileInput = document.getElementById("pdf");
                var selectedFileLabel = document.getElementById("selected-file-label");

                if (fileInput.files.length > 0) {
                    selectedFileLabel.textContent = "Selected File: " + fileInput.files[0].name;
                } else {
                    selectedFileLabel.textContent = "No file chosen.";
                }
            }

            // 'Back' button to go back
            function prevPage() {
                window.location.href = "adminPage.php"; // Replace with the desired URL
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
                            <li><a class="nav-link scrollto" href="adminPage.php">Dashboard</a></li>
                            <li><a class="nav-link scrollto active" href="editPage.php">Edit Article</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                </div>


            </header><!-- End Header -->

            <!-- ======= Hero Section ======= -->
            <main id="main">
                <section id="hero">
                    <div class="container">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" style="font-weight:bold; font-size:18px;" name="title" id="title" class="form-control" autocomplete="off" value="<?php echo $row['title']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="groupName">Group:</label>
                                        <select style="font-weight:bold; font-size:18px;" name="groupName" id="groupName" class="form-control" class="select1" required>
                                            <?php
                                            if ($row['groupName'] == "Challenges") {
                                            ?>
                                                <option selected value="Challenges">Challenges</option>
                                                <option value="Solutions">Solutions</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="Challenges">Challenges</option>
                                                <option selected value="Solutions">Solutions</option>
                                            <?php
                                            }
                                            ?>
                                        </select required>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="subgroup">Subgroup:</label>
                                        <select style="font-weight:bold; font-size:18px;" name="subgroup" id="subgroup" class="form-control" class="select2" required>
                                            <?php
                                            if ($row['subgroup'] == "Education & Training") {
                                            ?>
                                                <option selected value="Education & Training">Education & Training</option>
                                                <option value="Health, Psychology & Human Development">Health, Psychology & Human Development</option>
                                                <option value="Socioeconomy">Socioeconomy</option>
                                                <option value="Accessibility">Accessibility</option>
                                                <option value="Information Technology & Artificial Intelligence">Information Technology & Artificial Intelligence</option>

                                            <?php
                                            } else if ($row['subgroup'] == "Health, Psychology & Human Development") {
                                            ?>
                                                <option selected value="Health, Psychology & Human Development">Health, Psychology & Human Development</option>
                                                <option value="Education & Training">Education & Training</option>
                                                <option value="Socioeconomy">Socioeconomy</option>
                                                <option value="Accessibility">Accessibility</option>
                                                <option value="Information Technology & Artificial Intelligence">Information Technology & Artificial Intelligence</option>

                                            <?php
                                            } else if ($row['subgroup'] == "Accessibility") {
                                            ?>
                                                <option selected value="Accessibility">Accessibility</option>
                                                <option value="Education & Training">Education & Training</option>
                                                <option value="Socioeconomy">Socioeconomy</option>
                                                <option value="Health, Psychology & Human Development">Health, Psychology & Human Development</option>
                                                <option value="Information Technology & Artificial Intelligence">Information Technology & Artificial Intelligence</option>

                                            <?php
                                            } else if ($row['subgroup'] == "Information Technology & Artificial Intelligence") {
                                            ?>
                                                <option selected value="Information Technology & Artificial Intelligence">Information Technology & Artificial Intelligence</option>
                                                <option value="Education & Training">Education & Training</option>
                                                <option value="Socioeconomy">Socioeconomy</option>
                                                <option value="Accessibility">Accessibility</option>
                                                <option value="Health, Psychology & Human Development">Health, Psychology & Human Development</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option selected value="Socioeconomy">Socioeconomy</option>
                                                <option value="Education & Training">Education & Training</option>
                                                <option value="Health, Psychology & Human Development">Health, Psychology & Human Development</option>
                                                <option value="Accessibility">Accessibility</option>
                                                <option value="Information Technology & Artificial Intelligence">Information Technology & Artificial Intelligence</option>

                                            <?php
                                            }
                                            ?>

                                        </select required>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="author">Author:</label>
                                        <input type="text" style="font-weight:bold; font-size:18px;" name="author" id="author" class="form-control" autocomplete="off" value="<?php echo $row['author']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="years">Years:</label>
                                        <input type="number" style="font-weight:bold; font-size:18px;" class="form-control" id="years" name="years" min="1980" max="2023" autocomplete="off" value="<?php echo $row['years']; ?>" required>
                                        <span id="errorMessage"></span>
                                        <script>
                                            document.querySelector("input[type=number]")
                                                .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                                        </script>
                                    </div>

                                    <div class="form-group">
                                        <label for="source">Source:</label>
                                        <input type="text" style="font-weight:bold; font-size:18px;" name="source" id="source" class="form-control" autocomplete="off" value="<?php echo $row['source']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pdf">Select PDF file:</label>
                                        <div class="input-group">
                                            <input type="file" name="pdf" id="pdf" accept=".pdf" class="form-control" style="display: none;" onchange="updateSelectedFile()">
                                            <label for="pdf" style="font-weight:bold; font-size:18px;" class="btn btn-primary choose-file-button">Choose File</label>
                                            <br>
                                        </div>
                                        <span id="selected-file-label" class="selected-file"><?php echo $row['file']; ?></span>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <input type="cancel" name="cancelBtn" value="Cancel" onclick="prevPage()" class="btn btn-primary">
                                </div>

                                <div class="col-md-6">
                                    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                                </div>
                            </div>

                        </form>

                    </div>
                </section><!-- End Hero -->
            </main>
    <?php

        if (isset($_POST['submit'])) {
            $groupName = $_POST['groupName'];
            $subgroup = $_POST['subgroup'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $years = $_POST['years'];
            $source = $_POST['source'];
            $abstract = $_POST['file'];

            // Get the PDF file details
            $pdf_name = $_FILES['pdf']['name'];
            $pdf_tmp = $_FILES['pdf']['tmp_name'];
            $pdf_type = $_FILES['pdf']['type'];
            $pdf_size = $_FILES['pdf']['size'];
            $folder = 'C:\Users\user pc\Documents\SEM 3\fyp website\MARAP\assets\file';

            move_uploaded_file($pdf_tmp, $folder . $pdf_name);

            // Check if the title already exists in the database for a different entry
            $checkQuery = "SELECT title FROM pdf_files WHERE title = '$title' AND id != '$id'";
            $checkResult = mysqli_query($conn, $checkQuery);

            if (mysqli_num_rows($checkResult) > 0) {
                // Title already exists for a different entry, show a popup or error message
                echo '<div class="overlay"></div>
                <div class="popup">
                <img src="assets/img/cross.png">
                <h2>Update Failed</h2>
                <p>The title of the article already exist.<br>Please change the title name</p>
                <button class="closePopupBtn">Close</button>
            </div>';

                echo '<script>
                document.querySelector(".overlay").style.display = "block";
                document.querySelector(".popup").style.display = "block";

                document.querySelector(".closePopupBtn").addEventListener("click", function() {
                    document.querySelector(".overlay").style.display = "none";
                    document.querySelector(".popup").style.display = "none";
                });
        </script>';
            } else {
                // Title doesn't exist for a different entry, proceed with updating the database
                if ($pdf_tmp != "") {
                    // Insert the file and form data into the database
                    $updateSql = "UPDATE pdf_files SET file = '$pdf_name', groupName = '$groupName', subgroup = '$subgroup', title = '$title', author = '$author', years = '$years', source = '$source' WHERE id = '$id'";
                    mysqli_query($conn, $updateSql);
                } else {
                    $updateSql = "UPDATE pdf_files SET groupName = '$groupName', subgroup = '$subgroup', title = '$title', author = '$author', years = '$years', source = '$source' WHERE id = '$id'";
                    mysqli_query($conn, $updateSql);
                }

                // Set a flag to indicate successful form submission
                session_start();
                $_SESSION['edit_success'] = true;

                // Redirect to the next page
                header("Location: adminPage.php");
                exit();
            }
        }
    }
}
    ?>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>


        </body>

        </html>

        <!-- popup tak keluar & search bar specifik utk title -->
        <!-- nk bawak balik value dari edit page ke add page bila tekan edit-->