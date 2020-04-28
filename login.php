<?php 
session_start();
include 'connection.php';

$email=$_POST['email']; 
$pwd=$_POST['pass'];  


$sql="SELECT * FROM signup WHERE email= '$email' && pass='$pwd'";
$data=mysqli_query($conn,$sql); 
$total = $data->num_rows; 


if($total==1) 
{
    $_SESSION["myemail"] = $email;  
    $result = mysqli_query($conn,"select * from signup where email='$_POST[email]'");
    $row = mysqli_fetch_array($result);
    $myid = $row['id']; 
    $_SESSION["loginid"]= $myid;  
    $_SESSION["loginfname"]= $row['fname']; 
    $_SESSION["loginlname"]= $row['lname'];
   header('location:timeline.php');
}
else 
{
    header('location:login.html');
}

?>