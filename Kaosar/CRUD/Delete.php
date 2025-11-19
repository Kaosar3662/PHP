<?php
require_once("Connection.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = intval($_GET['id']);

  // Prepare DELETE statement
  $stmt = $connection->prepare("DELETE FROM $tableName WHERE id = ?");
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error deleting record: " . $stmt->error;
  }

  $stmt->close();
} else {
  exit("Invalid ID");
}
