 <?php 

include 'connection.php'; 

$sql="DELETE from blog where sno= '$_GET[delsno]'";
if(mysqli_query($conn,"$sql")) 
{
    header('location: profile.php');
} 
else {
    echo "Error deleting record: " . $conn->error;
}
?> 