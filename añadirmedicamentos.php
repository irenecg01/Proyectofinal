<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Medicamentos</title>
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
    <form action="../guardarmedicamentos.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre del medicamento:</label>

        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="descripcion">Descripción del medicamento:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
        <br>
        <br>
        <label for="hora">Hora de toma del medicamento:</label>
        <input type="time" id="hora" name="hora" required>
        <br>
        <input type="submit" class="btnEnviar" value="Enviar">
    </form>
        </div>
</body>
</html>

