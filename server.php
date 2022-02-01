
<?php

$host = "localhost";
 $username = "root";
 $password = "";
 $db = "bd-e-class";

 $conn =mysqli_connect($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>