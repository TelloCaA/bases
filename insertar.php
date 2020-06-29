<?php

    $usuario = 'root';
    $contra = '';
    $server = '127.0.0.1';
    $basedatos = 'alumnos';
    $port      = '3308' ;

    $conexion = mysqli_connect($server, $usuario, $contra, $basedatos , $port);

    $snombre = ($_POST['nombre']);
    $sapep = ($_POST['ape_p']);
    $sapem = ($_POST['ape_m']);
    $sdia = ($_POST['dia_n']);
    $smes = ($_POST['mes_n']);
    $sano = ($_POST['ano_n']);

    $consulta = " INSERT INTO alumnos(id, nombre, apellido_p, apellido_m, dia_n, mes_n, ano_n) VALUES ('', '$snombre' , '$sapep' , '$sapem' , '$sdia', '$smes', '$sano') ";

    $consulta2

    $resultado = mysqli_query($conexion, $consulta);

    if(!$resultado)
    {
      echo "Error al registrar";
    }
    else
    {
      echo "Usuario registrado";
    }

    mysqli_close($conexion);
?>