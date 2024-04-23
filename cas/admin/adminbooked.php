<?php
$servername = "localhost";
$username = "root"; // Replace 'username' with your actual MySQL username
$password = ""; // Replace 'password' with your actual MySQL password
$dbname = "cas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch booked flights from the database
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Booked</title>
  <link rel="stylesheet" href="adminbooked.css">
</head>
<body>
<div class="booked">
    <p>Booked Flight List</p>
  </div>
  <div class="sidebar"> 
    <ul>
      <li><a href="adminhome.php">Home</a></li>
      <li><a href="adminbooked.php">Booked</a></li>
      <li><a href="adminflights.php">Flights</a></li>
      <li><a href="adminairport.php">Airport</a></li>
      <li><a href="adminair.php">Airlines</a></li>
      <li><a href="adminuser.php">Users</a></li>
    </ul>
  </div>
<div class="content">
    <div class="search-and-navigation">
        <div class="navigation">
        <button type="button" id="previousButton">Previous</button>
        <span id="rowIndex">1</span>
        <button type="button" id="nextButton">Next</button>
        </div>
        <div class="search-container">
            <button type="submit">Search:</button>
            <input type="text" placeholder="Search...">
        </div>
    </div>
    <table class="booking-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Recipient</th>
                <th>Flight Details</th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td>1</td>
                <td>
                    <p><b>Name:</b> Derrick Sagrado Jr</p>
                    <p><b>Email address:</b> didinggwapo@gmail.com</p>
                    <p><b>Nationality:</b> Fil-Am</p>
                </td>
                <td>
                    <div class="flight-details-content">
                        <img src="cpacific.png" alt="Flight Image">
                        <div class="flight-details-text">
                            <p><b>Airline:</b> Cebu Pacific</p>
                            <p><b>Airport:</b> Brgy-16, Gingoog City Misamis Oriental</p>
                            <p><b>Departure:</b> Feb 30, 2024 9:00 AM</p>
                            <p><b>Arrival:</b> Feb 31, 2024 6:00 AM</p>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>


</body>
</html>
