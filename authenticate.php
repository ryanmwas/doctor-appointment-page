<?php
// Admin credentials
$admin_username = 'Admin';
$admin_password = 'sam@2024';

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the entered username and password match the credentials
if ($username == $admin_username && $password == $admin_password) {
    // Start a session to remember the login
    session_start();

    $_SESSION['loggedin'] = true;

    // Redirect to the appointment booking page
    header("Location: index.php");
    exit();
} else {
    // Display an error message and provied a link to retry
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>