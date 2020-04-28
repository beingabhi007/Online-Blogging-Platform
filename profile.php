<?php 
session_start(); 
if(!isset($_SESSION["myemail"])) 
{
  header('location: index.html');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="profile.css">  

</head>


<body>

<div class="bg1">
<a href="logout.php"><button class="btn btn-danger float-right mr-2 mt-2">Logout</button></a> 
<a href="timeline.php"><button class="btn btn-success ml-2 mt-2">Timeline</button></a>

<?php
include 'connection.php'; 
$sql = "select dp from signup where id= '$_SESSION[loginid]'"; 
$result= mysqli_query($conn,$sql); 
$row= mysqli_fetch_array($result); 

?>
<div class="card" style="width: 14rem;">
    <img class="card-img-top" src="image/<?php echo $row['dp'] ?>" onerror="this.src='avatar1.png';">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;"> <?php  echo $_SESSION["loginfname"];?> <?php  echo $_SESSION["loginlname"] ?> </h5>
      
    </div>
  </div> 
</div>    
<br>

<div>
  <p class="text1">Post History</p>  
</div>

<table class="table table-bordered table-dark" style="width: 95%; margin:0 auto" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date Created</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th> 
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
<?php 
include 'connection.php'; 
     
     $result = mysqli_query($conn,"select * from blog where id= $_SESSION[loginid]");
    // $row = mysqli_fetch_array($result);
    $i=1;
     while($row = mysqli_fetch_array($result))
     {
         ?>

  <tr>
      <td> <?php  echo $i ?> </td>
      <td> <?php echo $row['time'] ?> </td>
      <td> <?php echo $row['title'] ?> </td> 
      <td> <?php echo $row['content'] ?> </td>
      <td><a href="update.php?updatesno=<?php echo $row["sno"]; ?>"><i class="fa fa-pencil" style="font-size:28px;color:green;text-align:center"></i></a> 
          <a href="delete.php?delsno=<?php echo $row["sno"]; ?>"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></a></td>
    </tr>
    
    <?php 
  $i++;  
  } 
     ?>
    
  </tbody>
</table>

 

</body>
</html>