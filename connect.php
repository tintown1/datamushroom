<?php

session_start();

$conn = Mysqli_connect("localhost","root","","datamushroom");
$conn -> set_charset("utf8");
//if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
 // }
  //echo "Connected successfully";

?>