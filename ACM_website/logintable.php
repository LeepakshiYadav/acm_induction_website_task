<?php
$link=mysqli_connect('localhost','root','','acm_task_2');
$le=mysqli_real_escape_string($link,$_REQUEST['le']);
$lp=mysqli_real_escape_string($link,$_REQUEST['lp']);
$sql="select * from signup where email='$le' and password='$lp';";
if(mysqli_query($link,$sql))
{
  session_start();
$_SESSION['email']=$le;
header('location:index.php');
}
else
{
echo("Incorrect Username or password. Try again");
 echo("<br><a href='login.php' class='btn btn-primary mb-2'>Login/Signup</a>");

}

?>
