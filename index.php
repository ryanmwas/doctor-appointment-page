<?php
// Start the session
session_start();

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true) {
    header("Location: login.html");
    exit()
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Hospital</title>
</head>
<body>
    <header>
        <h1>My Hospital</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Doctors</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="logout.php">Logout</a></li><!--Logout link -->
            </ul>
        </nav>
    </header>
    <main>
        <section class="appointment">
            <h2>Book an Appointment</h2>
            <form action="appointment.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="doctor">Doctor:</label>
                <select name="doctor" id="name" required>
                    <option value="drsmith">Dr. Smith</option>
                    <option value="drjohnson">Dr. Johnson</option>
                </select>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <button type="submit">Book Appointment</button>
            </form>
        </section>
    </main>
    <footer>
        <p>Contact Us: 123 Hospital St, City, Country | Phone: +1 123-456-7890 | Email: info@myhospital.com</p>
    </footer>
</body>
</html>