<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="create.css"> 

</head>
<body>

<header class="card-header">
<p class="text1">Online Blogging Plateform</p>
</header>    

<div class="card"> 
    <header class="card-header">
   <span class="text2">Update your Post</span> 
   <a href="profile.php"><button class="btn btn-primary float-right">Profile</button></a>
    </header> 

<?php 
session_start(); 
include 'connection.php'; 

$result=mysqli_query($conn,"select * from blog where sno= $_GET[updatesno]");  
$row = mysqli_fetch_array($result);
$id=$_GET['updatesno'];
?>

 <form action="updatescript.php?updatesno= <?php echo $row['sno'] ?> " method="POST">
<label  class="ml-2">Title:</label><br>
<input type="text" class="ml-2" name="title" value="<?php echo $row['title']?>"><br>  
<label class="ml-2">Content:</label><br>
<textarea name="content"   class="ml-2"  ><?php echo $row['content']?></textarea> 
<button type="submit" class="btn float-right btn-success mr-2">Update</button>
 </form>   

</div>    
</body>
</html>