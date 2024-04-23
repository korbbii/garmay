<?php
ssession_start();

require_once 'dbconnect.php';

$email_phone = trim($_POST['email_phone']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM sup WHERE (email = '$email_phone' OR phonenumber = '$email_phone')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        $_SESSION['user_id'] = $row['id']; 
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_firstname'] = $row['firstname'];
        $_SESSION['user_lastname'] = $row['lastname'];
        header("Location: home.php");
        exit();
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}

