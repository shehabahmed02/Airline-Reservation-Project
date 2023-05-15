<?php
// include "process_booking.php";

$conn = new mysqli("localhost", "root", "", "shehab");
$query = "SELECT * FROM flights";
$result = mysqli_query($conn, $query);

if (isset($_POST['save'])) {
    $sql = "SELECT * from flights WHERE flight_number ='" . $_POST['flight_number'] . "'";
    $result = mysqli_query($conn, $sql);


    while ($row = mysqli_fetch_array($result)) {
?>
        <tr>
            <td>
                <?= $row['flight_number ']; ?>
            </td>
            <td>
                <?= $row['departure_city']; ?>
            </td>
            <td>
                <?= $row['destination_city']; ?>
            </td>
            <td>
                <?= $row['departure_date']; ?>
            </td>
            <td>
                <?= $row['departure_time']; ?>
            </td>
            <td>
                <?= $row['arrival_time']; ?>
            </td>
            <td>
                <?= $row['price']; ?>
            </td>
        </tr>
<?php
    }
}
?>

<html>

<head>

    <title>Airline Reservation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
        function getResult() {
            jQuery.ajax({
                url: "flightsSearch.php",
                data: 'term=' + $("#term").val(),
                type: "POST",
                success: function(data2) {
                    $("#result").html(data2);
                }
            });
        }
    </script>
</head>

<body>
    <header>
        <h1>Airline Reservation System</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Flights</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <h2>Welcome to the Airline Reservation System</h2>
    <p>Find the perfect flight for your travel needs with our easy-to-use booking system. Simply select your departure and destination cities, choose your travel dates, and hit search to view available flights.</p>
    <form>
        <label for="departure">Departure City:</label>
        <input type="text" id="departure" name="departure"><br>

        <label for="destination">Destination City:</label>
        <input type="text" id="destination" name="destination"><br>

        <label for="date">Travel Dates:</label>
        <input type="date" id="date" name="date"><br>

        <input type="submit" value="Search Flights">
    </form>
    <!-- <table id="flights">
        <thead>
            <tr>
                <th>Flight Number</th>
                <th>Departure City</th>
                <th>Destination City</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Price</th>
                <th>Book Flight</th>
            </tr>
        </thead>
    </table> -->

    <div class="dropdown">
        <input name="term" type="text" id="term" onkeyup="getResult()" placeholder="Search Item..." />
        <div class="dropdown-content">
            <div id="result"></div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Airline Reservation System</p>
    </footer>
</body>

</html>