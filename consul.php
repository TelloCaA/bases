<? php

	$usuario = 'root';
    $contra = '';
    $server = '127.0.0.1';
    $basedatos = 'alumnos';
    $port      = '3308' ;

    $conexion2 = new PDO('mysql:host = localhost ; dbname=alumnos'; 'root'; ''; '3308');
?>
    <table>
    	<thead>
    	<tr>
    		<th>id</th>
    		<th>Nombre</th>
    		<th>Apellido Paterno</th>
    		<th>Apellido Materno</th>
    		<th>Dia</th>
    		<th>Mes</th>
    		<th>Ano</th>
   		</tr>
   		</thead>
<? php foreach ($conexion2::query('SELECT * FROM alumnos') as $row) { ?>
	<td><? php echo $row['id'] ?></td>
	<td><? php echo $row['nombre'] ?></td>
	<td><? php echo $row['apellido_p'] ?></td>
	<td><? php echo $row['apellido_m'] ?></td>
	<td><? php echo $row['dia_n'] ?></td>
	<td><? php echo $row['mes_n'] ?></td>
	<td><? php echo $row['ano_n'] ?></td>
<? php } ?>
    </table>