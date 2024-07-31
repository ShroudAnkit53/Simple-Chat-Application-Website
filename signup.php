<?php 
include 'dbh.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$sql = "insert into signup(username,email,password)values('$uname','$pass','$email')";
$result = $conn -> query($sql);

header("Location:index.php");
?>