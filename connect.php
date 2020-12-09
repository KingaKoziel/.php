<?php
$servername = "mysql-kingakoziel.alwaysdata.net";
$username = "221044";
$password = "Hidden#12";
$dbname = "kingakoziel_2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
