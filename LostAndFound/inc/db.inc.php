<?php


$dbServerName = "localhost";
$dbUserName = "root";
$dbPass = "";
$dbName = "lostandfound1";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPass,$dbName);

if($conn == false){

	die("ERROR: Could not connect. " .mysqli_connect_error());
}