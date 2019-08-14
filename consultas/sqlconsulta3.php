<?php
 
// Create connection
require('../conn.php');

//query
$query="SELECT * FROM cliente ";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
mysqli_close($conn);

?>
