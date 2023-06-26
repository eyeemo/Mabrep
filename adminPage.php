<?php

session_start();


?>

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
    
    h5 {
        font-family: "Jost", sans-serif;
        font-size: 30px;
        font-weight: bolder;
        color: #000;
        letter-spacing: 2px;
        text-align: left;
        margin-bottom: 20px;
    }

    /*--------------------------------------------------------------
# aWord  Section
--------------------------------------------------------------*/
    #aWord {
        width: 100%;
        height: 30vh;
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


    .containerAdd {
        width: 100%;
        position: flex;

    }



    .btn.btn-secondary.btn-lg {
        display: inline-block;
        /*kiri tinggi,kanan lebar*/
        background-color: #fff;
        color: #000;
        font-weight: bold;
        border-radius: 10px;
        margin: 20px;
        width: 200px;
        height: 60px;
        border: 2px solid #000;
        margin-top: 30px;
    }

    .btn.btn-secondary.btn-lg:hover {
        background-color: #000;
        color: #fff;
        border: 2px solid #fff;
    }

    .btn.btn-secondary.btn-lg:focus {
        outline: none;
        background-color: #888888;
    }

    .same-size {
        width: 200px;
        height: 100%;
    }


    /* .addBtn { */
    /* position: relative;
        background-color: #000;
        color: #fff;
        border: 2px solid #000; */
    /* Add margin between buttons */
    /* font-weight: bolder;
        font-size: 20px;
        cursor: pointer;
        left: 80%;
        width: 15%; */
    /* Set desired width */
    /* height: 70px; */
    /* Set desired height */
    /* border-radius: 10px; */
    /* z-index: 1; */
    /* Set a lower z-index value */
    /* Add other necessary styles */
    /* } */


    /* .addBtn:hover {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;
    } */

    .backBtn {
        position: relative;
        background-color: #000;
        color: #fff;
        border: 2px solid #000;

        /* Add margin between buttons */
        font-weight: bolder;
        font-size: 26px;
        cursor: pointer;

        width: 10%;
        /* Set desired width */
        height: 60px;
        /* Set desired height */
        border-radius: 5px;
        position: relative;
        z-index: 1;
        /* Set a lower z-index value */
        /* Add other necessary styles */
    }

    .backBtn:hover {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;
    }

    /* .search-box {
        border: 3px solid #000;
        border-radius: 100vh 100vh;
        width: 900px;
        position: absolute;
        top: 100%;
        Left: 25%;
        background-color: #22c50d;

    } */
    /*--------------------------------------------------------------
    button untuk search dan button search  
--------------------------------------------------------------*/

    #searchInput {
        width: 100%;
        border: 2px solid #000;
        font-size: 20px;
        font-weight: bold;
    }

    input {
        width: 800px;
        height: 50px;
        border-radius: 100vh 0 150vh 100vh;
        border: none;
        outline: none;
        padding: 0 10px;

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

    .popupConfirm {
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

    .popupConfirm h2 {
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

    .popupConfirm img {
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

    .confirmDelBtn {
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
        margin-right: 52px;
    }

    .confirmDelBtn:hover {
        background-color: #8B0000;
        color: #fff;
        border: 2px solid #fff;
    }

    .cancelDelBtn {
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

    .cancelDelBtn:hover {
        background-color: #00008b;
        color: #fff;
        border: 2px solid #fff;
    }

    /*--------------------------------------------------------------
# list  Section
--------------------------------------------------------------*/
    #list {
        width: 100%;
        height: 100vh;
        background: white;
        overflow-y: scroll;
        max-height: 100vh;
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

    @media (max-width: 768px) {
        .backBtn {
            display: none;
        }
    }
</style>

<script>
    // for display popup
    window.addEventListener("DOMContentLoaded", function() {
        // Check if the form was successfully submitted
        var formSuccess = <?php echo isset($_SESSION['form_success']) && $_SESSION['form_success'] ? 'true' : 'false'; ?>;

        // Show the alert if the form was successfully submitted
        if (formSuccess) {
            document.querySelector(".popup").style.display = "block";

            // Hide popup after 3 seconds
            setTimeout(function() {
                document.querySelector(".popup").style.display = "none";
            }, 2000);
        }

        // Clear the session variable
        <?php unset($_SESSION['form_success']); ?>
    });

    // 'Back' button to go back
    function prevPage() {
        window.location.href = "adminPage.php"; // Replace with the desired URL
    }

    // Confirmation Modal
    function showConfirmationModal(recordId) {
        var modal = document.getElementById('popupConfirm');
        var overlay = document.getElementById('overlay');
        modal.style.display = "block";
        overlay.style.display = "block";

        var confirmBtn = document.getElementById('confirmDelBtn');
        confirmBtn.onclick = function() {
            deleteRecord(recordId);
        }

        var cancelBtn = document.getElementById('cancelDelBtn');
        cancelBtn.onclick = function() {
            modal.style.display = "none";
            overlay.style.display = "none";
        }
    }

    // Delete Record
    function deleteRecord(recordId) {
        window.location.href = "?delete=" + recordId;
    }
</script>


<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h5 class="logo me-auto">Admin Dashboard</h5>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="admin.php">Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!--  Message Add Successful Popup -->
    <div class="popup">
        <img src="assets/img/tick.jpeg">
        <h2>Article Succesfully Added</h2>
        <p>The article has succesfully added in the database.</p>
    </div>

    <main id="main">

        <section id="list">

            <div class="section-title"><br>
                <div class="container d-flex align-items-center">
                    <?php
                    if (isset($_GET['search']) || !empty($title)) {
                        echo '<button class="backBtn" onclick="prevPage()">Back</button>';
                    }
                    ?>
                    <!-- <button class="addBtn" onclick="window.location.href = 'addPage.php'">+ Add Article</button> -->
                </div>
                <h2>LIST ARTICLE</h2>
                <button type="button" class="btn btn-secondary btn-lg same-size" onclick="location.href='addPage.php'">+Add Article</button>
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


                <?php

                include("connection.php");

                // Function to delete a record from the database
                function deleteRecord($conn, $id)
                {
                    // Perform the delete operation based on the record's ID
                    $query = "DELETE FROM pdf_files WHERE id = $id";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        echo '<div class="popup" id="popupDel">
                    <img src="assets/img/tick.jpeg">
                    <h2>Article Successfully Deleted</h2>
                    <p>The article has been successfully deleted to the database.</p>
                </div>
                <script>
                    document.getElementById("popupDel").style.display = "block";

                    // Hide popup after 3 seconds
                    setTimeout(function() {
                        document.getElementById("popupDel").style.display = "none";
                    }, 2000);
                </script>';
                    } else {
                        echo "Error deleting record: " . mysqli_error($conn);
                    }
                }

                // Check if the delete button is clicked
                if (isset($_GET['delete'])) {
                    $recordId = $_GET['delete'];
                    deleteRecord($conn, $recordId);
                }



                if (isset($_GET['search'])) {
                    $title = $_GET['search'];
                    $searchColumn = "title";
                    if (empty($title)) {
                        $query = "SELECT * FROM pdf_files ORDER BY id DESC";
                    } else {
                        $query = "SELECT * FROM pdf_files WHERE $searchColumn = '" . mysqli_real_escape_string($conn, $title) . "'";
                    }
                } else {
                    $query = "SELECT * FROM pdf_files ORDER BY id DESC";
                }
                $result = mysqli_query($conn, $query);

                if ($result) {
                ?>
                    <div class="col-sm-12 p-3">
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table id="displayTable" class="table table-bordered text-center mt-30">
                                    <thead>
                                        <tr>
                                            <th>GROUP</th>
                                            <th>SUB-GROUP</th>
                                            <th>TITLE</th>
                                            <th>AUTHOR</th>
                                            <th>YEARS</th>
                                            <th>SOURCE</th>
                                            <th>ABSTRACT/SUMMARY</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <tr>
                                                    <td><?= $row['groupName']; ?></td>
                                                    <td><?= $row['subgroup']; ?></td>
                                                    <td><?= $row['title']; ?></td>
                                                    <td><?= $row['author']; ?></td>
                                                    <td><?= $row['years']; ?></td>
                                                    <td><?= $row['source']; ?></td>
                                                    <td>
                                                        <a class="view-btn" href="view_pdf.php?id=<?= $row['id']; ?>" target="_blank">View</a>
                                                    </td>
                                                    <td><a href="editPage.php?id=<?= $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                                    <td>
                                                        <a onclick="showConfirmationModal(<?= $row['id']; ?>)" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "No rows with column values containing 'B' found.";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    <?php
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                mysqli_close($conn);
                    ?>
                    </div>

                    <div class="overlay" id="overlay"></div>
                    <div class="popupConfirm" id="popupConfirm">
                        <img src="assets/img/cross.png">
                        <h2>Confirm Delete</h2>
                        <p>Are you sure you want to delete the article?</p>
                        <div class="btnPopup">
                            <button class="confirmDelBtn" id="confirmDelBtn">Confirm</button>
                            <button class="cancelDelBtn" id="cancelDelBtn">Cancel</button>
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