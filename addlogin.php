<?php
if(isset($_POST["submit"]))
{
$email=$_POST['email'];
$password=$_POST['password'];
if($email=='tushar@gmail.com'&& $password=='1234')
{
	header("Location:document.php");
}
else
{
	echo 'User name & password invalid!';
}
}
?>