<?php
    $Servidor = "localhost";
    $Usuario = "root";
    $Contraseña = "";
    $Basedatos = "unidad3";

    //Conexion
    $conn = mysqli_connect($Servidor,$Usuario,$Contraseña,$Basedatos);

    //Test Conexion
    if(!$conn){
        echo "No se pudo establecer la conexión a la Base de Datos";
    }
?>
