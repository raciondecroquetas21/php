<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, nombre, apellidos, sexo FROM lista_alumnos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellidos"]. "sexo:" . $row["sexo"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>