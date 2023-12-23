<?php
$dthidErr=$rcamtErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$txnnum=rand(00000000,99999999);
	$nam=trim($_POST["nam"]);
	$dthid=trim($_POST["dthid"]);
	$rcamt=trim($_POST["rcamt"]);
	$oprtr=trim($_POST["oprtr"]);	
	if(empty($dthid))
	{
		$dthidErr="Enter DTH Customer Id";
	}
	
	else
	{
		if(!preg_match("/^[0-9]*$/",$dthid))
		{
			$dthidErr="Id Is In Digits";
		}
	else
	{
		if((strlen($dthid)<10)||(strlen($dthid)>10))
		{
			$dthidErr="Enter 10 Digits Id";
		}
	}
	}

	if(empty($oprtr))
	{
		$oprtrErr="Please Select Operator ";
	}
	
	if(empty($rcamt))
	{
		$rcamtErr="Enter Recharge Amount";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$mnum))
		{
			$mnumErr="Recharge Amount In Digits";
		}
		else
	{
	include('../conn.php');
	
$query="insert into tbdthrc(txnnum,name,dthid,oprtr,amt) values('$txnnum','$nam','$dthid','$oprtr','$rcamt')";
if(mysqli_query($conn,$query))
{
									header('location:./mkpayment.php');
										
}
		} 
	}
}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:../user/index.php');
}
?>
	
		

	
