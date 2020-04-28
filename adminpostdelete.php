<?php 
session_start(); 
include 'connection.php'; 

$sql= "delete from blog where sno= '$_GET[delsno]'"; 
mysqli_query($conn,$sql); 
header('location: postmanagement.php');
?>