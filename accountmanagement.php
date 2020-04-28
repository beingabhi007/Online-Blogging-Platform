
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account mangement</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Account management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="postmanagement.php">Post management</a>
            </li>
          </ul>
          <form class="form-inline">
           <a href="logout.php"><button class="btn btn-outline-danger" type="button">Logout</button></a> 
        </form></div>
      </nav> 
      
   <br>  

   <p style="text-align: center; font-weight: 800; font-size: 1.5em;color: tomato;">Account management</p>

   <table class="table table-bordered table-dark" style="width: 95%; margin: 0 auto;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th> 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody> 

    <?php 
    session_start(); 
    include 'connection.php';  
    $sql="select * from signup"; 
    $result= mysqli_query($conn,$sql); 
    $i=1;
    while($row= mysqli_fetch_array($result)) 
    {
          ?>
      <tr>
        <th scope="row"><?php echo $i; ?></th>
        <td> <?php echo $row['fname']; ?> <? echo $row['lname']; ?></td>
        <td><?php echo $row['email'] ?></td>
        
        <td><a href="adminaccountdelete.php?delid=<?php echo $row['id'] ?>"><i class="fa fa-trash" style="font-size:28px;color:red;text-align:center"></i></a></td>
      </tr>

    </tbody>
  
    <?php 
     $i++;  
  } 
    ?>
  </table>



</body>
</html>