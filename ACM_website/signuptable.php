<?php
$a=$_POST['p'];
$b=$_POST['cp'];
if($a==$b)
{
$link=mysqli_connect('localhost','root','','acm_task_2');
$e=mysqli_real_escape_string($link,$_REQUEST['e']);
$p=mysqli_real_escape_string($link,$a);
$sql="insert into signup values('$e','$p')";
if(mysqli_query($link,$sql))
{
header('location:login.php');}
else
{
echo("Email id already exists");
 echo("<br><a href='login.php' class='btn btn-primary mb-2'>Login/Signup</a>");
}
}
else
{
echo("Password does not match");
 echo("<br><a href='sign.php' class='btn btn-primary mb-2'>Login/Signup</a>");
}
?>
