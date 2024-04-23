<?php
require_once 'dbconnect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_phone = $_POST['email_phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';

if ($password !== $confirm_password) {
    echo "Passwords do not match.";
    exit;
}

$sql = "INSERT INTO sup (firstname, lastname, email, phonenumber, password) VALUES ('$first_name', '$last_name', '$email_phone', '$phone_number', '$password')";

if ($conn->query($sql) === TRUE) {
    header('Location: login.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
