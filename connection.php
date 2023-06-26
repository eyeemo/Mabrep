<?php
    $conn = new mysqli("localhost", "root", "", "file");

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>