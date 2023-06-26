<!DOCTYPE html>
<html>

<head>
    <title>View PDF</title> <!--DISPLAY FILE PDF-->
</head>

<body>
    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "file";

    // Create a connection to MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the 'id' parameter is set in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Retrieve the PDF file details from the database based on the provided 'id'
        $sql = "SELECT * FROM pdf_files WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pdf_name = $row['file'];

            // Display the PDF file
            echo "<embed src='assets/file/$pdf_name' type='application/pdf' width='100%' height='1300px' />";
        } else {
            echo "No PDF file found.";
        }
    } else {
        echo "Invalid request.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>

</html>
