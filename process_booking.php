<!DOCTYPE html>
<html>
<head>
    <title>Airline Reservation System - Process Booking</title>
</head>
<body>
    <h2>Flight Booking Confirmation</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the selected flight number
        $flightNumber = $_POST['flight_number'];

        // Sanitize input
        $flightNumber = htmlspecialchars($flightNumber);

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shehab";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve flight details
        $stmt = $conn->prepare("SELECT * FROM flights WHERE flight_number = ?");
        $stmt->bind_param("s", $flightNumber);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $flight = $result->fetch_assoc();
            echo "<h3>Flight Details</h3>";
            echo "<p>Flight Number: " . $flight['flight_number'] . "</p>";
            echo "<p>Departure City: " . $flight['departure_city'] . "</p>";
            echo "<p>Destination City: " . $flight['destination_city'] . "</p>";
            echo "<p>Departure Date: " . $flight['departure_date'] . "</p>";

            // Display a booking form
            echo "<h3>Passenger Details</h3>";
            echo "<form action='confirm_booking.php' method='POST'>";
            echo "<input type='hidden' name='flight_number' value='" . $flight['flight_number'] . "'>";
            echo "<label for='passenger_name'>Passenger Name:</label>";
            echo "<input type='text' id='passenger_name' name='passenger_name'><br>";
            echo "<label for='email'>Email:</label>";
            echo "<input type='email' id='email' name='email'><br>";
            echo "<input type='submit' value='Confirm Booking'>";
            echo "</form>";
        } else {
            echo "<p>Flight not found.</p>";
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
