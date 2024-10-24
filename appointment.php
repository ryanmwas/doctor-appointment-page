<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$dbname = "hospital";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['phone'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];

// Insert the appointment data into the database
$sql = "INSERT INTO appointments (name,email,phone,doctor,appointment_date)
VALUES ('$name', '$email', '$phone', '$doctor', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error:" .$sql. "<br>" .$conn->error;
}

// Close the connection
$conn->close();
?>