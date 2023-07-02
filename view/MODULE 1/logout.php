<?php
// Start or resume the session
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other desired page
header("Location: LOGIN_PAGE.php");
exit;
?>
