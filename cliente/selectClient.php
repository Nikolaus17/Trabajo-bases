<?php

// Create connection
require('../conn.php');

//query
$query="SELECT * FROM persona";
$result = mysqli_query($conn, $query) or
die(mysqli_error($conn));

mysqli_close($conn);

?>
