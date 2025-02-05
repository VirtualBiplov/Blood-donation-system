<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_database = 'bld_dntn';

// $con = mysqli_connect($db_host, $db_user, $db_password, $db_database);

$con = new mysqli($db_host,$db_user,$db_password,$db_database);

if ($con->connect_error)
  {
  die('Could not connect: ' . $con->connect_error);
  }
?>
