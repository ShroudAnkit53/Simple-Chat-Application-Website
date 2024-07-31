<?php 
session_start();
include "dbh.php";

$msg = $_POST["msg"];

// Check if the message is not empty
if (!empty($msg)) {
    // Prepare SQL statement to insert the message into the database
    $stmt = $conn->prepare("INSERT INTO posts (msg) VALUES (?)");
    $stmt->bind_param("s", $msg);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        header("Location:home.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Message cannot be empty";
}

// Close the database connection
$conn->close();
?>