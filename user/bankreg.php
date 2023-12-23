<?php
$cnumErr=$nameErr=$bnameErr=$namErr=$bnamErr=$blogpassErr=$txnpassErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$cnum=trim($_POST["cnum"]);
	$bname=trim($_POST["bank"]);
	$nam=trim($_POST["nam"]);
	$name=trim($_POST["nm"]);
	$bnam=trim($_POST["bnam"]);	
	$blogpass=trim($_POST["blogpass"]);	
	$txnpass=trim($_POST["txnpass"]);
	if(empty($cnum))
	{
		$cnumErr="Enter Card Number";
	}
	
	else
	{
		if(!preg_match("/^[0-9]*$/",$cnum))
		{
			$cnumErr="Contact Number Is In Digits";
		}
	else
	{
		if((strlen($cnum)<8)||(strlen($cnum)>8))
		{
			$cnumErr="Enter 8 Digits Card Number";
		}
	}
	}
if(empty($bname))
	{
		$bnameErr="Please Select Bank Name";
	}
	if(empty($name))
	{
		$nameErr="Please Enter Card Holder Name ";
	}
	if(empty($nam))
	{
		$namErr="Please Enter Card Holder Name ";
	}
	if(empty($bnam))
	{
		$bnamErr="Please Enter Bank User Name";
	}
	
	if(empty($blogpass))
	{
		$blogpassErr="Enter Bank Login Password";
	}
		if(empty($txnpass))
	{
		$txnpassErr="Enter Bank Transaction Password";
	}
	
	
		else
	{
	
	include('../conn.php');
	$query="SELECT * FROM tbbank WHERE usrnam='$bnam' and accnum='$cnum' ";
	$result=mysqli_query($conn,$query);
	$check=mysqli_fetch_array($result,MYSQLI_NUM);
	if($check[0]>1)
	{
	echo "<script type='text/javascript'>alert('Invalid Detail');</script>";
	}
	else{
$query="insert into tbbank(unam,name,bname,usrnam,pass,transpass,accnum) values('$name','$nam','$bname','$bnam','$blogpass','$txnpass','$cnum')";
if(mysqli_query($conn,$query))
{
echo "<script type='text/javascript'>alert('Bank Account Registered Successfully');</script>";
									header('location:./index.php');
										
}

		} 
	}
}

	
	
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
