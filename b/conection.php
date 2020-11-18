<?php
/*
error_reporting(E_ALL);
ini_set('display_errors','1');
*/
$servername = "localhost";
$username = "tanulo5";
$password = "qwertz";
$db="tanulo5_baratsagok";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("nem sikerült csatlakozni: " . $conn->connect_error);
}
?>
