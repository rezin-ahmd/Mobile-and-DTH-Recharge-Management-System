<?php
$rcamtErr=$tktmErr=$valErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$rcamt=trim($_POST["rcamt"]);
	$tktm=trim($_POST["tktm"]);
	$val=trim($_POST["val"]);
	$oprtr=trim($_POST["oprtr"]);	
	if(empty($rcamt))
	{
		$rcamtErr="Enter Recharge Ammount";
	}
	
	

	if(empty($tktm))
	{
		$tktmErr="Enter Talktime";
	}
	if(empty($val))
	{
		$valErr="Enter Validity";
	}
	
	if(empty($oprtr))
	{
		$oprtrErr="Please Select Operator ";
	}
	
	
		else
	{
	include('../conn.php');
	
$query="insert into offrs(rchamt,tlktime,valadity,operator) values('$rcamt','$tktm','$val','$oprtr')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Offer Submitted');</script>";
									header('location:./offers.php');
										
}
		}
	}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
