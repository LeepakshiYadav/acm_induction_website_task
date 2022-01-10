<?php
session_start();
$email = $_SESSION['email'];
$link=mysqli_connect('localhost','root','','acm_task_2');
$f=mysqli_real_escape_string($link,$_REQUEST['t2']);
$sql="insert into feedback values('$email','$f')";
if(mysqli_query($link,$sql))
{
  echo("Feedback stored successfully :)");
  echo("<br><a href='index.php'>Go Back to main page</a>");
}
else
{
echo(mysqli_error($link));
}
?>
