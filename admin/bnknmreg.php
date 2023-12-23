<?php
$bnErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$bn=trim($_POST["bn"]);
		
	if(empty($bn))
	{
		$bnErr="Enter Bank Name";
	}
	
	
	
		else
	{
	include('../conn.php');
	
$query="insert into tbbanknm(bname) values('$bn')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Bank Added');</script>";
									header('location:./bank.php');
										
}
		}
	}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
