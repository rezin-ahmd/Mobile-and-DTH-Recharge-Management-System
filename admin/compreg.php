<?php
$nameErr=$emlErr=$cmpErr=$cntErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$name=trim($_POST["nm"]);
	$cnt=trim($_POST["cnt"]);
	$eml=trim($_POST["eml"]);
	$cmp=trim($_POST["cmp"]);	
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
	if(empty($cmp))
	{
		$cmpErr="Please Enter Your Complaint";
	}
	
	if(empty($eml))
	{
		$emlErr="E-Mail is required";
	}
	else
	{
		if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$eml))
		{
			$emlErr="Not a Valid E-Mail";
		}
		else
	{
	include('conn.php');
	
$query="insert into tbcomplaints(cmpnum,usrnam,usrmnum,complaint,usreml) values('$cmpnum','$name','$cnt','$eml','$cmp')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Complaint Submitted');</script>";
									header('location:./index.php');
										
}
		}
		}
		}
		
	
	
	

?>
	
		

	
