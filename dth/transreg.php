<?php

$usrErr=$pwdErr="";
session_start();
if(isset($_SESSION['user']))
{
$usrnam=$_SESSION['user'];

}
if(isset($_SESSION['bnam']))
{
$bnknam=$_SESSION['bnam'];
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$usrname=trim($_POST["usr"]);
	$passwrd=trim($_POST["pwd"]);
	if(empty($usrname))
	{
		$usrErr="Username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$usrname))
		{
			$usrErr="Invalid username";
		}
	}
	if((empty($passwrd)))
	{
		$pwdErr="Password is required";
	}
	else
	{
		if((!preg_match("/^[a-zA-Z0-9]*$/",$passwrd)))
		{
			$pwdErr="Password should be Alpha numeric";
		}
		else
		{
		
			include('../conn.php');
			$query="SELECT * FROM tbbank WHERE (usrnam='$usrname' and transpass='$passwrd') and bname='$bnknam'";
			$result=mysqli_query($conn,$query);
			 if (mysqli_num_rows($result) == 1)
			 {
				echo "<script type='text/javascript'>alert('Transaction Success');</script>";
				header("refresh:0;url='./proccess.php'");
			$query1="select * from tbdthrc";
$result1=mysqli_query($conn,$query1);
			while($row1=mysqli_fetch_array($result1))
			 {
			 $id=$row1[0];
			 }
			$query="update tbdthrc SET status = 'success' where id = '$id' ";
$result=mysqli_query($conn,$query);
			 }
			 else
			{
			echo "<script type='text/javascript'>alert('Invalid Transaction');</script>";
			
			}
			 }
			
			
			
		
		}
	}


if(isset($_POST['cancel']))
{
$query="update tbdthrc SET status = 'failed' where id = '$id' ";
$result=mysqli_query($conn,$query);
}
?>
