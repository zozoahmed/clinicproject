<?php
//  $con=mysqli_connect("localhost","root","","hms");
session_start();

$server   = "localhost";
$database = "clinicdata2";
$username = "root";
$password = "";

 if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>