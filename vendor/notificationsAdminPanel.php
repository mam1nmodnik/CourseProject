<?php 
session_start();
@include('connect.php');
require_once 'connect.php';
header('Content-Type: application/json');
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$output = array();
$result = mysqli_query($connect,"SELECT * FROM `volunteerUniform`");
 
  while($row = mysqli_fetch_assoc($result)) {
    $output[] = $row; 


    
  }
  echo json_encode($output);
?>
