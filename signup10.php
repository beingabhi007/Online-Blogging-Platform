<?php
session_start();
include 'connection.php'; 
mysqli_select_db($conn,"myblog"); 

$sql="INSERT INTO signup (fname,lname,email,dob,pass,cpass) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[dob]','$_POST[pass]','$_POST[cpass]')"; 
$_SESSION['newemail']= $_POST['email']; 
$file = $_FILES['file'];
if($conn->query($sql) === TRUE) 
{ 
      
$sql= "select id from signup where email= '$_SESSION[newemail]' ";     
$result =mysqli_query($conn,$sql); 
$row= mysqli_fetch_array($result);    
$myid= $row['id'];
echo $myid;


 $ext= pathinfo($file['name'],PATHINFO_EXTENSION);


    $target = 'image/'.$myid.".".$ext;
    move_uploaded_file($file['tmp_name'], $target);







//echo "<script>alert('Successfully !!! New account created');document.location='login.html'</script>"; 

} 
else 
{
    //echo "Error: " . $sql . "<br>" . $conn->error; 
    // echo "The email is already registered with, if 
    // you don't remember the password then you can reset it."; 

    echo '<script>alert("Email is already registered with us."); document.location = "signup.html"; </script>';
} 
mysqli_close($conn); 
?>










    
