<!DOCTYPE html>
<html>

<head>
    <title>Upload PDF Form</title> <!--INSERT FILE P-->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .view-btn,
        .download-btn {
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-right: 5px;
            cursor: pointer;
        }

        /* Custom Button Style */
        .choose-file-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #4caf50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .choose-file-button:hover {
            background-color: #45a049;
        }

        .choose-file-button:active {
            background-color: #3d8b3d;
        }

        .selected-file {
            margin-top: 10px;
            font-weight: bold;
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
    </script>
</head>

<body>
    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
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

        // Get the PDF file details
        $pdf_name = $_FILES['pdf']['name'];
        $pdf_tmp = $_FILES['pdf']['tmp_name'];
        $pdf_type = $_FILES['pdf']['type'];
        $pdf_size = $_FILES['pdf']['size'];
        $folder = 'C:\Users\user pc\Documents\SEM 3\fyp website\MARAP\assets\file/';
        
        move_uploaded_file($pdf_tmp, $folder . $pdf_name);
        // Get the additional form data
        $group = $_POST['groupName'];  
        $subgroup = $_POST['subgroup'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $years = $_POST['years'];
        $source = $_POST['source'];

        // Check if a file is selected
        if ($pdf_tmp != "") {
            // Read the file content
            // $pdf_content = addslashes(file_get_contents($pdf_tmp));

            // Insert the file and form data into the database
            $sql = "INSERT INTO pdf_files (file, groupName, subgroup, title, author, years, source)
            VALUES ('$pdf_name', '$group', '$subgroup', '$title', '$author', '$years', '$source')";


            if ($conn->query($sql) === TRUE) {
                echo "PDF file and form data uploaded successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close the database connection
        $conn->close();
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="pdf">Select PDF file:</label>
        <input type="file" name="pdf" id="pdf" accept=".pdf" style="display: none;" onchange="updateSelectedFile()">
        <label for="pdf" class="choose-file-button">Choose File</label><br>
        <span id="selected-file-label" class="selected-file">No file chosen.</span><br><br>


        <label for="groupName">Group:</label>
        <input type="text" name="groupName" id="groupName"><br><br>
        <label for="subgroup">Subgroup:</label>
        <input type="text" name="subgroup" id="subgroup"><br><br>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title"><br><br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author"><br><br>
        <label for="years">Years:</label>
        <input type="text" name="years" id="years"><br><br>
        <label for="source">Source:</label>
        <input type="text" name="source" id="source"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
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

    // Retrieve the PDF files from the database
    $sql = "SELECT * FROM pdf_files";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the table header
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Group</th>";
        echo "<th>Subgroup</th>";
        echo "<th>Title</th>";
        echo "<th>Author</th>";
        echo "<th>Years</th>";
        echo "<th>Source</th>";

        echo "</tr>";

        // Display the table rows with PDF file details
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['file'] . "</td>";
            echo "<td>" . $row['groupName'] . "</td>";
            echo "<td>" . $row['subgroup'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['years'] . "</td>";
            echo "<td>" . $row['source'] . "</td>";
            echo "<td>";
            echo "<a class='view-btn' href='view_pdf.php?id=" . $row['id'] . "' target='_blank'>View</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No PDF files found.";
    }

    // Close the database connection
    $conn->close();
    ?>


</body>

</html>
<!-- 
    CREATE TABLE pdf_files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    groupName VARCHAR(255) NOT NULL,
    subgroup VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    years INT NOT NULL,
    source VARCHAR(255) NOT NULL,
    file VARCHAR(255) NOT NULL
);
 -->
