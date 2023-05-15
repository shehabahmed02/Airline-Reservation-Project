<?php
session_start();

$conn = new mysqli("localhost", "root", "", "shehab");
$query = "SELECT * FROM flights";
$result = mysqli_query($conn, $query);

$sql = "Select flights.flight_number, flights.departure_city, flights.destination_city, flights.departure_date, flights.departure_time, flights.arrival_time, flights.price from flights" ;// Escape user inputs for security
$term =  $_POST['term'];
  echo "<table border=1 width=100%> <th>flight_number</th><th>departure_city</th><th>destination_city</th></th><th>departure_date</th></th><th>departure_time</th></th><th>arrival_time</th></th><th>price</th></th>";
if(!empty($term)){
    // Attempt select query execution
    $sql = $sql . " WHERE flight_number LIKE '%" . $term . "%' or departure_city LIKE '%" . $term . "%' ";
}
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<tr><td>". $row['flight_number'] ."</td><td>".$row["departure_city"]."</td><td>".$row["destination_city"]."</td><td>".$row["departure_date"]."</td><td>".$row['departure_time']."</td><td>".$row['arrival_time']."</td><td>".$row['price']."</td></tr>";
            }
            
        } else{
            echo "<tr><td colspan=4>No matches found</td></tr>";
        }
    } else{
        echo "<tr><td colspan=4>ERROR: Could not able to execute $sql. " . mysqli_error($conn)."</td></tr>";
    }

 echo"</table>";
// close connection
mysqli_close($conn);
