<?php 
  $conn = new mysqli("localhost", "root", "", "chemini");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>