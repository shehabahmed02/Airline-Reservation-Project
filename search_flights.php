<!DOCTYPE html>
<html>
<head>
    <title>Airline Reservation System - Search Flights</title>
</head>
<body>
    <h2>Search Flights</h2>
    <form action="process_booking.php" method="POST">
        <label for="departure">Departure City:</label>
        <input type="text" id="departure" name="departure"><br>

        <label for="destination">Destination City:</label>
        <input type="text" id="destination" name="destination"><br>

        <label for="date">Travel Date:</label>
        <input type="date" id="date" name="date"><br>

        <input type="submit" value="Search Flights">
    </form>

    <?php
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $departure = $_POST['departure'];
        $destination = $_POST['destination'];
        $date = $_POST['date'];

        // Sanitize input
        $departure = htmlspecialchars($departure);
        $destination = htmlspecialchars($destination);
        $date = htmlspecialchars($date);

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shehab";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL query
        $stmt = $conn->prepare("SELECT * FROM flights WHERE departure_city = ? AND destination_city = ? AND departure_date = ?");
        $stmt->bind_param("sss", $departure, $destination, $date);
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Display the flight results
        if ($result->num_rows > 0) {
            echo "<h3>Flight Search Results</h3>";
            echo "<table>";
            echo "<tr><th>Flight Number</th><th>Departure City</th><th>Destination City</th><th>Departure Date</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["flight_number"] . "</td>";
                echo "<td>" . $row["departure_city"] . "</td>";
                echo "<td>" . $row["destination_city"] . "</td>";
                echo "<td>" . $row["departure_date"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No flights found for the selected criteria.</p>";
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
