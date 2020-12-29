<?php
	// Ignacio Alcalde Cid, Emilio Tasso Monte//

	// Conectar con el servidor de la Base de Datos
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$conectar=@mysqli_connect('localhost','root','');
	// Se verifica si la conexión es correcta con el servidor con el siguiente código
	if(!$conectar){
		echo"No se pudo conectar con el servidor";
	}else{

		$base=mysqli_select_db($conectar, 'powerexperienceis2');
		// Verificamos si se encuentra la base de datos
		if(!$base){
			echo"No se pudo encontrar la base de datos";
		}
	}

	// Recogemos las variables del formulario 
	$nombre=$_POST['name'];
	$apellido=$_POST['surname'];
	$email=$_POST['email'];
	$telefono=$_POST['phone'];
	$mensaje=$_POST['message'];

	// Hacemos la sentencia de SQL

	$sql="INSERT INTO formulario VALUES('$nombre',
									   '$apellido',
									   '$email',
									   '$telefono',
									   '$mensaje')";

	// Ejecutamos la sentencia de SQL

	$ejecutar=mysqli_query($conectar, $sql);

	// Verificamos la ejecución	

	if(!$ejecutar){
		echo"Hubo algún error";
	}else{
		echo"Datos guardados correctamente en la Base de Datos<br><a href='index.html'>Volver</a>";
	}						   

?>