<?php 
session_start(); 
if(!isset($_SESSION["myemail"])) { 

    ?> 
<!-- Public timeline start -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="timeline.css"> 
</head>


<body>
 
<div class="bg1"> 
<a href="login.html"><button class="btn btn-success float-right mr-2 mt-2">Login</button></a> 
<br><br>
<p class="text1">Timeline</p>
</div>
 <br>


     
<?php   
     include 'connection.php'; 
     $sql ="select * from blog order by sno DESC"; 
     $result = mysqli_query($conn,$sql);
    
     while($row = mysqli_fetch_array($result)){
         ?> 

<div class="card justify-content-center">
<header class="card-header">
 <span id="text2"> <?php echo $row['title'] ?> <span id="text3" class="float-right"><a href="publicprofile.php?publicid=<?php echo $row["id"]?>"><?php echo $row['name']?></a></span></span>   
</header>         

<p class="ml-2 mt-2 ">
   <span id="text3"> <?php echo $row['content'] ?> </span>
</p>   
 </div> <br> 
 
 <?php
     }
    
    
     ?>




<!-- public timeline end -->


<?php } else { ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="timeline.css"> 
</head>


<body>
 
<div class="bg1"> 
<a href="create.html"><button class="btn btn-success ml-2 mt-2">Create a post</button></a>    
<a href="logout.php"><button class="btn btn-danger float-right mr-2 mt-2">Logout</button></a> 
<a href="profile.php"><button class="btn btn-success float-right mr-2 mt-2">Profile</button></a> 
<br><br>
<p class="text1">Timeline</p>
</div>
 <br>


     
<?php   
     include 'connection.php'; 
    
     $result = mysqli_query($conn,"select * from blog order by sno DESC");
     
     while($row = mysqli_fetch_array($result)){
         ?> 

<div class="card justify-content-center">
<header class="card-header">
 <span id="text2"> <?php echo $row['title'] ?> <span id="text3" class="float-right"><a href="publicprofile.php?publicid=<?php echo $row["id"]?>"><?php echo $row['name']?></a></span></span>   
</header>         

<p class="ml-2 mt-2 ">
   <span id="text3"> <?php echo $row['content'] ?> </span>
</p>   
 </div> <br>
 <?php
     }
     ?>
   
   <!-- <?php
    header("refresh: 10;");
?>  -->

<br> 
<a href="adminlogin.html"><button class="btn btn-outline-primary float-right">Admin</button></a>    
</body>
</html> 

    <?php   }
   ?>