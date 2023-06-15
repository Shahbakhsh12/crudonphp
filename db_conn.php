<?php
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

$connect = mysqli_connect($Servername, $username, $password, $dbname);

if (!$connect) {
    die("connection failed " . mysqli_connect_error());
}
"New record add successfully";
?>