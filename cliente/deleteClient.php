<?php

require('../conn.php');
$query="delete from cliente where cc='$_POST[d1]'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	header ("Location: cliente.php");
}
else{
	echo "algo ha ococrrido";
}
echo $cedula;
?>