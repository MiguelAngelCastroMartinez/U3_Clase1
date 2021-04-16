<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Proyecto CRUD de PHP con MySQL</title>
</head>
<body>
<div class="container jumbotron text-center"> 
    <h2>Mi Primer Proyecto CRUD</h2>
    <h5>Mostrar datos de la Base</h5>
    <?php
        //Agregando cadena de conexion a BD
        include 'conexion.php';

        //Extraer Datos de la tabla

        //Query para estraer datos
        $consulta = "Select * from personal";

        //Variable contenedora de datos
        $resultado = mysqli_query($conn, $consulta);
    ?>
</div>
<div class="container jumbotron">
    <!--Proceso de extracción de datos-->
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="container jumbotron text-center">
                <th scope= "col" >MATRICULA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">CORREO</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //cilco para extraer el registro del paquete
                while($dato = mysqli_fetch_assoc($resultado)){
                    echo '<tr> <th scope="row" class="text-center">'.$dato['Matricula'].'</th>';
                    echo '<td>'.$dato['Nombre'].'</td>';
                    echo '<td>'.$dato['Telefono'].'</td>';
                    echo '<td>'.$dato['Correo'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>