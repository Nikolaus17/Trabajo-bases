<?php
require('../conn.php');
$query="delete from cliente";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	header ("Location: cliente.php");
}
else{
	echo "algo ha ococrrido";
}
?>