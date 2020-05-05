<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// se escribe la consulta
$sql = "SELECT * FROM " . $tablename;
// Se realiza la consulta
$result = $conn->query($sql);
?>
