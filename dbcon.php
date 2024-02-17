<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "phpadminpanel";

// Create connection
$con =  mysqli_connect($host, $username, $password, $database);
// Check connection
if (!$con) {
    // header("Location: ../errors/db.php");
    die(mysqli_connect_errno($con));

}

else{
    echo "database-connected";
}

?>