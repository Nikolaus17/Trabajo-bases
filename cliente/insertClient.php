<?php

// Create connection
require('../conn.php');

$cedula = $_POST["cc"];

//query
if($cedula<0){
	echo "cedula debe ser positiva";
}

else{

	$query="INSERT INTO `cliente`(`cc`,`nombre`, `email`, `celular`, `direccion`)
 	VALUES ('$_POST[cedula]','$_POST[nombre]', '$_POST[email]@$_POST[correo]', '$_POST[celular]','$_POST[direccion]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: cliente.php");


 	}else{
 		echo "Ha ocurrido un error al crear el cliente";
 	}


}

?>
