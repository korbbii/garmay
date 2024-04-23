<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Airlines</title>
  <link rel="stylesheet" href="adminair.css">
</head>
<body>
  <div class="welcome">
    <p>Airlines</p>
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
    <form id="airportForm">
      <div class="form-group">
        <center><h2> Airlines Form</h2></center><br><br>
        <label for="airport">Airlines:</label>
        <input type="text" id="airport" name="airport" required>
      </div>
      <div class="form-group">
        <label for="location">Country:</label>
        <input type="text" id="location" name="location" required>
      </div>
      <div class="form-group">
        <button type="submit" class="save-button">Save</button>
        <button type="button" class="cancel-button">Cancel</button>
      </div>
    </form>
  </div>
<div class="table-container">
  <table>
    <tr>
      <th>Airlines</th>
      <th>Country</th>
      <th></th>
    </tr>
    <tr>
      <td>Air Asia</td>
      <td>Philippines</td>
      <td>
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>Cebu Pacific</td>
      <td>Philippines</td>
      <td>
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>Philippine AirLines</td>
      <td>Philippines</td>
      <td>
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
  </table>
</div>

</body>
</html>
