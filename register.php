<?php

  $firstName = $POST['firstName'];
  $lastName = $POST['lastName'];
  $email = $POST['email'];
  $password = $POST['password'];


  $conn = new mysqli('localhost', 'root', 'test');
  if ($conn -> connect_error) {
    die('Connection Failed: '.$conn->connect_error);
  } else {
    $stmt = $conn->prepare(" insert in registration(firstName, lastName, email, password) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
    $stmt->execute();
    echo "Register Complete...!";
    $stmt->close();
    $conn->close();
  }

?>