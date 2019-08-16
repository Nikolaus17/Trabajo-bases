<?php

require('../conn.php');
$query="DELETE from persona where CC='$_POST[d1]'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
	header ("Location: cliente.php");
}
else{
	echo "algo ha salido mal";
}
echo $cedula;
?>
