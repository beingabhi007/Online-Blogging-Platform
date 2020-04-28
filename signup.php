<?php
if(isset($_POST['submit'])) 
{
session_start();
include 'connection.php'; 


$sql="INSERT INTO signup (fname,lname,email,dob,pass,cpass,dp) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[dob]','$_POST[pass]','$_POST[cpass]',5)"; 
$_SESSION['newemail']= $_POST['email']; 
$file = $_FILES['file'];
if($conn->query($sql) === TRUE) 
{ 
      
$sql= "select id from signup where email= '$_SESSION[newemail]' ";     
$result =mysqli_query($conn,$sql); 
$row= mysqli_fetch_array($result);    
$myid= $row['id'];

 $ext= pathinfo($file['name'],PATHINFO_EXTENSION);
 $myfilename= $myid.".".$ext;


$sql2= "update signup SET dp= '$myfilename' where id='$myid' ";
mysqli_query($conn,$sql2);

 echo $myfilename;
    $target = 'image/'.$myid.".".$ext;
    move_uploaded_file($file['tmp_name'], $target);

echo "<script>alert('Successfully !!! New account created');document.location='login.html'</script>"; 

} 
else 
{
    //echo "Error: " . $sql . "<br>" . $conn->error; 
    // echo "The email is already registered with, if 
    // you don't remember the password then you can reset it."; 

    echo '<script>alert("Email is already registered with us."); document.location = "signup.php"; </script>';
} 
} 
?>










    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<link rel="stylesheet" href="signup.css">    
</head>
<body>


<header class="card-header"> 
   <a href="index.html"><i class="fa fa-home float-left" style="font-size:60px;color:red;"></i> </a>
<p class="text1">Online Blogging Plateform</p>
</header>    


    
<div class="card">
<header class="card-header">
<span class="text2">Create an account</span>
<a href="login.html"><button class="btn float-right btn-outline-success">Sign in</button></a>
</header>     
<form action="signup.php" method="POST" enctype="multipart/form-data">
<input type="text" name="fname" id="in1" placeholder="First name" class="mt-2 ml-2">
<input type="text" name="lname" id="in2" placeholder="Last name" class="ml-2" > <br>
<input type="email" name="email" id="in3" placeholder="Enter your email" class="ml-2 mt-2">
<!-- <input type="date" name="" id="in4" placeholder="Enter your DOB" class="ml-2"><br>  
 --> 
 <input name="dob" placeholder="Date of Birth" class="textbox-n ml-2" type="text" onfocus="(this.type='date')" id="in4"><br>
<input type="password" name="pass" id="in5" placeholder="Create a password" class="ml-2 mt-2">
<input type="password" name="cpass" id="in6" placeholder="Confirm password" class="ml-2"><br>    
<label class="ml-2" id="text3">Upload a profile picture</label><br>
<input type="file" name="file" class="ml-2">
<input type="submit" name="submit" value="Submit" class="btn float-right btn-primary mr-4 mt-3" >
<!-- <a href=""><button type="submit"  name="submit" class="btn float-right btn-primary mr-4 mt-3">Submit</button></a> -->
</form>
</div>


</body>
</html>