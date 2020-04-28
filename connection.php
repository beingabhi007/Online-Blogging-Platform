<?php 

$conn= mysqli_connect('localhost','root',''); 

mysqli_select_db($conn,"myblog");
if($conn->connect_error) 
{
    echo  "Bhad me jao connect nhi ho raha h tumhara priya Database";

}  

?>