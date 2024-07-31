<?php 
session_start();
include "dbh.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConvoConnect - Home Page</title>
    <link rel="stylesheet" href="styles1.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <div id="main">
       <h2>Welcome to the Chat Application</h2>
       <h3>
       <?php 
       echo $_SESSION['name'];
       ?> 
       -Online</h3>

       <div class="output">
          <?php 
          $sql = "SELECT * FROM posts";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "" . $row["name"]. " --" . $row["msg"] ." --". $row["date"]. "<br>";
                  echo "<br>";
              }
          } else {
              echo "No messages yet";
          }
          $conn->close();
          ?>
       </div>

       <form action="send.php" method="post" id="message">
         <textarea name="msg" placeholder="Type Your Message...." class="form-control"></textarea><br>
         <input type="submit" value="Send">
       </form><br>

       <form action="logout.php" id="button">
         <input type="submit" value="Logout">
       </form>
    </div>
</body>
</html>