<?php

require('../conn.php');

$query = "SELECT * FROM";
$result = mysqli_query($conn, $query) or
die(mysqli_error($conn));

mysqli_close($conn);

?>