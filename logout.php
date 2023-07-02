<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user back to the login page
header("Location: admin.php");
exit();
?>