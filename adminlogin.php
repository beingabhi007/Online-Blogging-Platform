<?php 

if($_POST['email']=='admin' && $_POST['pass']== 'admin1289')
{
   header('location: dashboard.php');
}
else 
{
   echo '<script>alert("You are not an admin"); document.location="timeline.php"</script>';
}
?>