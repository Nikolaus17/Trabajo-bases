<?php
require('../conn.php');
$query="DELETE from persona";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	header ("Location: cliente.php");
}
else{
	echo "algo ha salido mal";
}
?>
