<? php

	$usuario = 'root';
    $contra = '';
    $server = '127.0.0.1';
    $basedatos = 'alumnos';
    $port      = '3308' ;

    $conexion = mysqli_connect($server, $usuario, $contra, $basedatos , $port);

    if(!conexion)
    {
    	echo("Conexion fallida");
    }
    else
    {
    	echo ("Conexion establecida");
    }
?>