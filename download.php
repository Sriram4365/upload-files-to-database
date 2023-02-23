<?php
  $conn = mysqli_connect("hostname", "username", "password", "database");
  $sql = "SELECT name FROM files WHERE id=" . $_GET['id'];
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  mysqli_close($conn);

  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="' . $row['name'] . '"');
  readfile("uploads/" . $row['name']);
  exit;
?>

