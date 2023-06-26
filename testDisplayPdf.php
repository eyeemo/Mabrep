<!DOCTYPE html>
<html>
<head>
    <title>PDF File Viewer</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .view-btn {
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-right: 5px;
            cursor: pointer;
        }
    </style>
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
        echo "<th>Actions</th>";
        echo "</tr>";

        // Display the table rows with PDF file details
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['file']."</td>";
            echo "<td>".$row['groupName']."</td>";
            echo "<td>".$row['subgroup']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['years']."</td>";
            echo "<td>".$row['source']."</td>";
            echo "<td>";
            echo "<a class='view-btn' href='view_pdf.php?id=".$row['id']."' target='_blank'>View PDF</a>";
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


<input type="file" id="chooseFileInput" style="display: none;">
<label for="chooseFileInput" class="chooseFileButton">Choose File</label>

<style>
.chooseFileButton {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  color: #ffffff;
  background-color: #4caf50;
  border-radius: 4px;
  cursor: pointer;
}

.chooseFileButton:hover {
  background-color: #45a049;
}

.chooseFileButton:active {
  background-color: #3d8b3d;
}
</style>


</body>
</html>
