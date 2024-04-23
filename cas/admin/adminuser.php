<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Users</title>
  <link rel="stylesheet" href="adminuser.css">
  <style>

.fbutton {
    float: top;
    margin-top: 20px;
    margin-left:68.8rem;
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
  <div class="welcome">
    <p>Users</p>
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
  <div class="table-container">
  <table>
    <tr>
      <th>Name</th>
      <th>Email/Phone no.</th>
      <th></th>
    </tr>
    <tr>
      <td>Administrator</td>
      <td>Admin</td>
      <td>
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>Diding Charles Cagande</td>
      <td>goodboys@gmail.com</td>
      <td>
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
    <tr>
      <td>Prince Rud</td>
      <td>sirpogi@gmail.com</td>
      <td>
        <button class="edit-button">Edit</button>
        <button class="delete-button">Delete</button>
      </td>
    </tr>
  </table>
</div>
<div class="fbutton">
    <label for="newUserCheckbox" class="new-user-label">+ New User</label>
    <input type="checkbox" id="newUserCheckbox" class="new-user-checkbox">
    <div class="popup">
        <form id="newUserForm" class="popup-content">
            <span class="close" id="closeButton">&times;</span>
            <h2>Create New User</h2><br>
            <input type="text" id="name" name="name" placeholder="Name" required><br><br>
            <input type="text" id="email" name="email" placeholder="Email/Phone no." required><br><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            <button type="submit" class="save-button">Create User</button>
            <button type="button" class="cancel-button" id="cancelButton">Cancel</button>
        </form>
    </div>
</div>

  <script>
    document.getElementById("cancelButton").addEventListener("click", function() {
      document.querySelector(".popup").style.display = "none";
      document.getElementById("newUserCheckbox").checked = false;
    });
    
  </script>
</body>
</html>
