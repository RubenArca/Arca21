<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// se escribe la consulta
$sql = "SELECT * FROM " . $tablename ." WHERE name='" . $imgname ."'";
// Se realiza la consulta
$result = $conn->query($sql);
// Extrae el resultado que se quiere
echo mysqli_fetch_assoc($result)['base64'];
?>
