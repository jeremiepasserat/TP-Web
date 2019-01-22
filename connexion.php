<?php
/**
 * Created by PhpStorm.
 * User: o2070696
 * Date: 22/01/19
 * Time: 10:29
 */

$host = "dbhost";
$user = "o2070696";
$password = "o2070696";
$database = "bd_o2070696";

$mysqli = mysqli_connect($host, $user, $password, $database);

//echo $mysqli->connect_errno . ") " . $mysqli->connect_error;

//echo (!$mysqli);
/*
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
    echo "connexion ok";
}

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}
*/