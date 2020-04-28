<?php 
session_start(); 
include 'connection.php'; 
if(!isset($_SESSION['myemail'])) 
{
   header('location: index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dashboard.css"> 

</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accountmanagement.php">Account management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="postmanagement.php">Post management</a>
        </li>
      </ul>
      <form class="form-inline">
       <a href="logout.php"><button class="btn btn-outline-danger" type="button">Logout</button></a> 
    </form></div>
  </nav>
<br><br>

<?php 
include 'connection.php'; 

$sql1="Select * from signup"; 
$result1=mysqli_query($conn,$sql1); 
$total1= $result1->num_rows;  

$sql2="SELECT * FROM blog"; 
$result2= mysqli_query($conn,$sql2); 
$total2= $result2->num_rows;
?>

<div class="row">
<div class="col-lg-6 col-sm-12">
<div class="card">
<header class="card-header">
<p class="text2">Total number of Users</p>
</header> 
<p class="text3"><?php echo $total1; ?></p>
</div>
</div>   


<div class="col-lg-6 col-sm-12">
<div class="card">
<header class="card-header">
<p class="text2">Total number of Posts</p>    
</header>
<p class="text3"><?php echo $total2;?> </p>
</div>
</div>   


     
</div>



<body>     
</body>
</html>