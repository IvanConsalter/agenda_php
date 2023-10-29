<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $query = "SELECT * FROM contacts";

  $stat = $conn->prepare($query);

  $stmt->execute();

  $contacts = $stmt->fetchAll();
  
?>