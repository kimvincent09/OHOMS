<?php
$server = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ohom";
$conn = mysqli_connect($server, $dbUsername, $dbPassword, $dbName);
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
