<?php 
include 'connection.php'; 


$forgetemail= $_POST['email']; 
$forgetdob= $_POST['dob'];

$sql="SELECT * FROM signup where email= '$forgetemail' && dob= '$forgetdob'"; 
$data= mysqli_query($conn,$sql);     
$row = mysqli_fetch_array($data);
$total = $data->num_rows; 

if($total==1) 
{
    echo $row['pass']; 
    echo "<script>alert('Your Password is '+'$row[pass] ');document.location='login.html'</script>"; 
} 
else 
{
    header('location: forget.html');
  
}
?>