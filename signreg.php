<?php
$nameErr=$usrErr=$emailErr=$pwdErr=$cpwdErr=$apntidErr=$spcltyErr=$cntErr=$vtErr=$otErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=trim($_POST["fnm"]);
	$usrname=trim($_POST["usr"]);
	$passwrd=trim($_POST["password"]);
	$confirmpassword=trim($_POST["cpassword"]);
	
	$cnt=trim($_POST["cnt"]);
	
	if(empty($name))
	{
		$nameErr="name is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			$nameErr="Only alphabets and white space allowed";
		}
	}
	
	 if(empty($usrname))
	{
		$usrErr="Username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$usrname))
		{
			$usrErr="Only alpha-numeric allowed";
		}
	}
	if(empty($cnt))
	{
		$cntErr="Contact Number Is Required";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$cnt))
		{
			$cntErr="Contact Number Is In Digits";
		}
	else
	{
		if((strlen($cnt)<10)||(strlen($cnt)>10))
		{
			$cntErr="Enter 10 Digits Contact Number";
		}
	}
	}
	
		if(empty($passwrd))
	{
		$pwdErr="Password is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$passwrd))
		{
			$pwdErr="Password should be alpha numeric digits";
		}
	else
	{
		if((strlen($passwrd)<6)||(strlen($passwrd)>12))
		{
			$pwdErr="Password should be 6-12 digits";
		}
	}
	}
	
	
	
	if(empty($confirmpassword))
	{
		$cpwdErr="Confirm Password is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$confirmpassword))
		{
			$cpwdErr="Password should be alpha numeric digits";
		}
	else
	{
		if((strlen($confirmpassword)<6)||(strlen($confirmpassword)>12))
		{
			$cpwdErr="Password should be 6-12 digits";
		}
	else
	{
		if($passwrd!=$confirmpassword)
		{
			$cpwdErr="Oops! Password did not match, try again";
		}
		

	else
	{
	include('conn.php');
	$db_usrquery="SELECT * FROM tbusr WHERE usernam='$usrname' ";
	$result=mysqli_query($conn,$db_usrquery);
	$checkusr=mysqli_fetch_array($result,MYSQLI_NUM);
	if($checkusr[0]>1)
	{
	echo "<script type='text/javascript'>alert('Username already exist');</script>";
	}
		else
		{
	$usrrol='S';
$query="insert into tbusr(name,usernam,password,usrrol,cntnum) values('$name','$usrname','$passwrd','$usrrol','$cnt')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Regestration Successfull');</script>";
									header('location:./login.php');
										
}
		}
	}
	
	
	}
	}
	}
	}
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
