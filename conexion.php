<?php
$servername = "localhost";
$username = "root";
$contraseña = "";
$dbname = "cuidate";
$conn = mysqli_connect($servername, $username, $contraseña, $dbname);

if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}
//echo "Conexión exitosa";

function getMedicamentos() { // esta funcion lo que hace es coger la tabla con todo 

  global $conn;
  
  $sql = "SELECT nombre,descripcion,hora FROM anadirmedicamentos";
  $stmt = $conn->prepare($sql); 
  $stmt->execute();
  $result = $stmt->get_result();

  // 5. Cerrar la conexión a la base de datos y retornar el arreglo de perros
  $stmt->close();

}
?>