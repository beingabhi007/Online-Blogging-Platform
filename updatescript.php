<?php 
session_start(); 
include 'connection.php'; 

$updatedtitle= $_POST['title']; 
$updatedcontent= $_POST['content'];


mysqli_query($conn,"update blog set title= '$_POST[title]' , content= '$_POST[content]' where sno= $_GET[updatesno]"); 
header('location:profile.php');
?>