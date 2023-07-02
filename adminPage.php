<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['name'])) {
    header("Location: admin.php");
    exit();
}
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

    <!-- Icon Bootstrap -->
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />

</head>
<style>
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

    .addBtn {
        position: relative;
        background-color: #000;
        color: #fff;
        border: 2px solid #000;
        /* Add margin between buttons */
        font-weight: bolder;
        font-size: 26px;
        cursor: pointer;
        left: 75%;
        width: 20%;
        /* Set desired width */
        height: 60px;
        /* Set desired height */
        border-radius: 5px;
        z-index: 1;
        /* Set a lower z-index value */
        /* Add other necessary styles */
    }


    .addBtn:hover {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;
    }

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

    h5 {
        margin: 0 0 10px 0;
        font-size: 40px;
        font-weight: 500px;
        line-height: 56px;
        color: #fff;
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
            <h1 class="logo me-auto">Admin Dashboard</h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0.2 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg> Log Out
                        </a></li>
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

            <div class="section-title">
                <div class="container d-flex align-items-center">
                    <?php
                    if (isset($_GET['search']) || !empty($title)) {
                        echo '<button class="backBtn" onclick="prevPage()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg> Back
                        </button>';
                    }
                    ?>


                </div>
                <h2>LIST ARTICLE</h2>
                <button class="btn btn-secondary btn-lg same-size" onclick="window.location.href = 'addPage.php'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z" />
                        </svg> Add Article</button>
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
                        <button class="btn btn-outline-success" id="buttonSearch" type="submit"> Search</button>
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
                ?>
                        <script>
                            window.location.href = 'adminPage.php';
                        </script>
                    <?php
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
                                                        <a href="view_pdf.php?id=<?= $row['id']; ?>" target="_blank" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg> View
                                                        </a>
                                                    </td>
                                                    <td><a href="editPage.php?id=<?= $row['id']; ?>" id="editBtn" class="btn btn-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg> Edit
                                                        </a></td>
                                                    <td>
                                                        <a onclick="showConfirmationModal(<?= $row['id']; ?>)" class="btn btn-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                            </svg> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "Error: There's no article named \"";
                                            echo $_GET['search'];
                                            echo "\" in the system. \nPlease create one";
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