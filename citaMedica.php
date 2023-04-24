<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Medicamentos</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
       
        /* Estilo CSS para mover el formulario a la derecha */
        .contenedor {
          margin-top: 20%;
           text-align:center;
          }
    </style>
</head>
<body>
    <?php include 'menu.html'; ?>
    <div class="contenedor">
        <form action="../guardarcita.php" method="post" enctype="multipart/form-data">
            <label for="fecha_cita">Fecha de la Cita:</label>
            <input type="date" id="fecha_cita" name="fecha_cita" required><br><br>
            <label for="hora_cita">Hora de la Cita:</label>
            <input type="time" id="hora_cita" name="hora_cita" required><br><br>
            <label for="lugar_cita">Lugar de la Cita:</label>
            <input type="text" id="lugar_cita" name="lugar_cita" required><br><br>
            <label for="motivo_cita">Motivo de la Cita:</label>
            <input type="text" id="motivo_cita" name="motivo_cita" required><br><br>
        </form>
    </div>
</body>
</html>
