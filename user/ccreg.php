<?php
include('../conn.php');
session_start();
   
   if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  
	  }
$cnumErr=$exp1Err=$exp2Err=$cvvErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$cnum=trim($_POST["cnum"]);
	$exp1=trim($_POST["exp1"]);
	$exp2=trim($_POST["exp2"]);	
	$cvv=trim($_POST["cvv"]);	
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

	if(empty($exp1))
	{
		$exp1Err="Please Enter Month ";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$exp1))
		{
			$exp1Err="Month In Digits";
		}else
	{
		if((strlen($exp1)<2)||(strlen($exp1)>2))
		{
			
		}
	}
		}
	if(empty($exp2))
	{
		$exp2Err="Please Enter Year";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$exp2))
		{
			$exp2Err="Year In Digits";
		}else
	{
		if((strlen($exp2)<4)||(strlen($exp2)>4))
		{
			
		}
	}
		}
	if(empty($cvv))
	{
		$cvvErr="Enter CVV Number";
	}
		else
	{
		if(!preg_match("/^[0-9]*$/",$cvv))
		{
			$cvvErr="CVV In Digits";
		}
	else
	{
		if((strlen($cvv)<3)||(strlen($cvv)>3))
		{
			$cvvErr="Enter 3 Digits CVV";
		}
	
	
		else
	{
	
	include('../conn.php');

$query="select * from tbcard where name='$name'";
$result=mysqli_query($conn,$query);
			 while($row=mysqli_fetch_array($result))
			 {
			$card=$row[2];
			$exp=$row[3];
			$cv=$row[4]; 
			if($cnum==$card && $cvv==$cv)
			{
			header('location:./connect.php');
			}
			else
			{
			echo "<script type='text/javascript'>alert('Invalid Detail');</script>";
			}
			
										
}
		} 
	}
}}	

	
	
if(isset($_POST['cancel']))
{
	$query1="select * from tbrc";
$result1=mysqli_query($conn,$query1);
			while($row1=mysqli_fetch_array($result1))
			 {
			 $id=$row1[0];
			 }
			 echo $id;
 $query="delete  from tbrc where id='$id'";
$result=mysqli_query($conn,$query);
header('location:./recharge.php'); 
}
?>
	
		

	
