<?php 
session_start();
include "dbh.php";

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$email = $_POST['email'];

// Prepare SQL statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM signup WHERE username = ? AND email = ? AND password = ?");
$stmt->bind_param("sss", $uname, $email, $pass);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if a row was returned
if ($result->num_rows > 0) {
    header("Location: error.php");
} else {
    // Fetch the row
    $row = $result->fetch_assoc();

    // Start the session and set the username
    $_SESSION['name'] = $row['username'];

    // Redirect to the home page
    header("Location: home.php");
}
?>