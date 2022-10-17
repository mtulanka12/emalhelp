<?php
$conn= new mysqli('localhost','root','','exam');

if (!$conn){
  die(mysqli_error($conn));
}
?>
