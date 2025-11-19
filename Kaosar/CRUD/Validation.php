<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  require_once("Connection.php");

  $name = makeSafe($_POST["name"]);
  $email = makeSafe($_POST["email"]);
  $phone = makeSafe($_POST["phone"]);
  $age = makeSafe($_POST["age"]);
  $address = makeSafe($_POST["address"]);

  // validation
  if (empty($name) || strlen($name) > 30) {
    echo "Invalid name. Must be up to 30 characters.<br>";
  } elseif (empty($email) || strlen($email) >= 50) {
    echo "Invalid email. Must be up to 50 characters and a valid email.<br>";
  } elseif (empty($phone) ||  strlen($phone) != 11) {
    echo "Invalid phone. Must be exactly 11 digits.<br>";
  } elseif (empty($age) || strlen($age) > 3) {
    echo "Invalid age. Must be a number up to 3 digits.<br>";
  } elseif (empty($address) || strlen($address) > 150) {
    echo "Invalid address. Must be up to 50 characters.<br>";
  } else {

    // Use prepared statement to insert into table
    $stmt = $connection->prepare("INSERT INTO $tableName (name, email, phone, age, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $email, $phone, $age, $address);

    if ($stmt->execute()) {
      header("Location: index.php");
      exit();
    } else {
      echo "Error: " . $stmt->error;
    }

    $stmt->close();
  }
} else {
  exit();
}

function makeSafe($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
