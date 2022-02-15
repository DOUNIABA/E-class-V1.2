
<?php

$host = "localhost";
 $username = "root";
 $password = "";
 $db = "e_classe_db";

 $conn =mysqli_connect($host, $username, $password, $db);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>