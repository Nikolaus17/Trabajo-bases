<?php
// Create connection
require('../conn.php');
$cedula = $_POST["cedula"];
//query
if($cedula<0){
	echo "cedula debe ser positiva";
}
else{
	$query="INSERT INTO persona(`CC`,`Nombre`, `Email`, `telefono`, `Direccion`, `tipoP`)
 	VALUES ('$_POST[cedula]','$_POST[name]', '$_POST[email]', '$_POST[telefono]','$_POST[direccion]','$_POST[tipo]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
 	if($result){
        header ("Location: cliente.php");
 	}else{
 		echo "Ha ocurrido un error al crear el cliente";
 	}
}
?>
