<?php

    $usuario = 'root';
    $contra = '';
    $server = '127.0.0.1';
    $basedatos = 'alumnos';
    $port      = '3308' ;

    $conexion = mysqli_connect($server, $usuario, $contra, $basedatos , $port);


    $vari = ($_POST['uwu']);

    $consul = "DELETE FROM alumnos WHERE nombre = '$vari' ";

    $resultado = mysqli_query($conexion, $consul);

    if(!$resultado)
    {
      echo "Error al eliminar";
    }
    else
    {
      echo "Usuario eliminado";
    }


?>