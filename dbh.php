<?php
$conn = mysqli_connect("localhost","root","","chatapplication");
if(!$conn){
    echo "Connection Failed". mysqli_connect_error();
}
else{
    echo "Connection Successful";
}
?>