<?php 

$conn= mysqli_connect('localhost','root',''); 

mysqli_select_db($conn,"myblog");
if($conn->connect_error) 
{
    echo  "ERROR IN CONNECTING TO DB";

}  

?>
