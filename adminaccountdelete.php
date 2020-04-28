<?php 
session_start(); 
include 'connection.php'; 
$sql="delete from signup where id= '$_GET[delid]'"; 
$result=mysqli_query($conn,$sql);
header('location: accountmanagement.php');
?>