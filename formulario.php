<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Proyecto CRUD de PHP con MySQ</title>
</head>
<body class="container">
<h1>Mi Primer Proyecto CRUD</h1>
    <h2>Registro de la Base de datos</h2> 
    <?php
        //Agregando cadena de conexion a BD
        include 'conexion.php';

        //Extraer Datos de la tabla

        //Query para estraer datos
        $consulta = "Select * from personas";

        //Variable contenedora de datos
        $resultado = mysqli_query($conn, $consulta);
    ?>
<form method="post">
    <h2>Formulario para el Registro de Datos</h2>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nombre" placeholder="Escriba su Nombre" name="nombre">
        <label for="nombre">Escriba su Nombre</label>
    </div>
    <div class="form-floating mb-3">
        <input type="tel" class="form-control" id="telefono" placeholder="No de Telefono" name="telefono">
        <label for="Telefono">No de Telefono</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="correo">
        <label for="email">name@example.com</label>
    </div>
    <div>
        <input class="btn btn-primary" type="submit" value="Guardar Datos" name="boton"/>
     
    </div>
</form>

<?php
    if($_POST){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $insertar = "Insert Into Personas (nombre, tel, mail) Values ('$nombre', '$telefono', '$correo')";
        if( mysqli_query($conn, $insertar)){
            echo"Nuevo registro creado con éxito";
        }else{
            echo "Error: ".$sql . "<br>" . mysqli_error($conn);
        }
       
        
    }
    ?>
</body>
</html>