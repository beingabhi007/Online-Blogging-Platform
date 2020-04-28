<?php 
session_start();  
if(!isset($_SESSION["myemail"])) {
    header("location: login.html");
} 
else 
{
include 'connection.php'; 


$fullname= $_SESSION["loginfname"]. " " .$_SESSION["loginlname"];
 
$sql="Insert INTO blog (id,title,content,name) VALUES('$_SESSION[loginid]','$_POST[title]','$_POST[content]','$fullname')"; 

if($conn->query($sql) === TRUE) 
{
     header('Location: timeline.php');  
      
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error; 
}
}

?>