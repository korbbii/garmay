<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Booked</title>
  <link rel="stylesheet" href="adminflights.css">
  <style>

    .fbutton {
        float: top;
        margin-top: 20px;
        margin-left:75rem;
        padding-bottom:20px;
        transition: border-color 0.3s ease; /* Add transition effect */
    }

    .fbutton button {
        background-color: #373668;
        padding: 10px 20px;
        color: white; /* Set text color */
        border: none;
        cursor: pointer;
        font-weight: bold;
    }

    .fbutton button:hover {
        color: white; /* Change text color on hover */
        background-color: #2d43d6; /* Change border color on hover */
    }

  </style>
</head>
<body>
<div class="booked">
    <p>Flight List</p>
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
                <th>Date</th>
                <th>Information</th>
                <th>Booked</th>
                <th>Seats</th>
                <th>Available</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td>Feb 25, 2024</td>
                <td class="information">
                <img src="cpacific.png" alt="Airline Logo">
                    <p><b>Airline:</b> Cebu Pacific</p>
                    <p><b>Airport:</b> Brgy-16, Gingoog City Misamis Oriental</p>
                    <p><b>Departure:</b> Feb 30, 2024 9:00 AM</p>
                    <p><b>Arrival:</b> Feb 31, 2024 6:00 AM</p>
                </td>
                <td>0</td>
                <td>2</td>
                <td>5</td>
                <td>₱ 6,980.00</td>
            </tr>
            <tr>
                <td>Feb 25, 2024</td>
                <td class="information">
                    <img src="aasia.png" alt="Airline Logo">
                    <p><b>Airline:</b> Cebu Pacific</p>
                    <p><b>Airport:</b> Brgy-16, Gingoog City Misamis Oriental</p>
                    <p><b>Departure:</b> Feb 30, 2024 9:00 AM</p>
                    <p><b>Arrival:</b> Feb 31, 2024 6:00 AM</p>
                </td>
                <td>0</td>
                <td>2</td>
                <td>5</td>
                <td>₱ 6,980.00</td>
            </tr>
        </tbody>
    </table>
    <div class="fbutton">
        <button>+ New Flight</button>
    </div>
</div>
</body>
</html>
