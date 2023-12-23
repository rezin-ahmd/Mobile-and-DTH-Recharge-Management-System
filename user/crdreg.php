<?php
$cnumErr=$exp1Err=$exp2Err=$cvvErr=$txncpassErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$nam=trim($_POST["nam"]);
	$cnum=trim($_POST["cnum"]);
	$exp1=trim($_POST["exp1"]);
	$exp2=trim($_POST["exp2"]);	
	$cvv=trim($_POST["cvv"]);
$txncpass=trim($_POST["txncpass"]);		
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
	}
	}
	if(empty($txncpass))
	{
		$txncpassErr="Enter Transaction Password";
	}
	
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$txncpass))
		{
			$txncpassErr="Password Should Be In Alpha-Numeric";
		}
	else
	{
		if((strlen($txncpass)<6)||(strlen($txncpass)>10))
		{
			$txncpassErr="Enter 6-10 Digits Card Number";
		}
	
	
		else
	{
	
	include('../conn.php');
	$query="SELECT * FROM tbcard WHERE ccnum='$cnum' and cvv='$cvv' ";
	$result=mysqli_query($conn,$query);
	$check=mysqli_fetch_array($result,MYSQLI_NUM);
	if($check[0]>1)
	{
	echo "<script type='text/javascript'>alert('Invalid Detail');</script>";
	}
	else{
$query1="insert into tbcard(name,ccnum,expdate,cvv,txnpass) values('$nam','$cnum','$exp1/$exp2','$cvv','$txncpass')";
if(mysqli_query($conn,$query1))
{
									header('location:./index.php');
										
}
		} 
	}
}}
}
	

	
	
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
