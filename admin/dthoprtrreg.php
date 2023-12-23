<?php
$operatorErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$operator=trim($_POST["operator"]);
		
	if(empty($operator))
	{
		$operatorErr="Enter Operator";
	}
	
	
	
		else
	{
	include('../conn.php');
	
$query="insert into tbdthoprtr(oprtr) values('$operator')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Operator Added');</script>";
									header('location:./dthoprtr.php');
										
}
		}
	}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
