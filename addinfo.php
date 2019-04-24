<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	$date=$_POST['date'];
	$snumber=$_POST['snumber'];
	$email=$_POST['email'];
	$signature=$_POST['signature'];

	$sql="INSERT INTO nomenationfrom(cname,cnumber,cfathername,cmothername,address,cage,cdate,seatnumber,email,csignature) values('$name','$phone','$fname','$mname','$address','$age','$date','$snumber','$email','$signature')";
	if(mysqli_query($con,$sql))
	{
		echo 'data is successfully added';
	}
	else
	{
		echo 'data is not added';
	}
}
?>