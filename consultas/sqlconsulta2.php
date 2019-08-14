<?php
 
// Create connection
require('../conn.php');

//query
$query="";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
mysqli_close($conn);

?>