<?php
include("inicio/conexion.php");

if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['hora'])) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $hora = $_POST['hora'];
    
    try {
        if ($conn) {

            $query = "INSERT INTO anadirmedicamentos (nombre,descripcion,hora) VALUES (?, ? ,  ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sss', $nombre, $descripcion, $hora);
            $stmt->execute();


            //header('Location: perdidas_logueado.php');
        } else {
            echo "Error en la conexión a la base de datos.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn->close();

} else {
    echo "Error. Faltan datos en el formulario.";
}
?>
