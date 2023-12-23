<?php
$bnErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$bn=trim($_POST["bank"]);
		
	if(empty($bn))
	{
		$bnErr="Select Bank Name";
	}
	
	
	
		else
	{
	session_start();
	$_SESSION['bnam']=$bn;
	header('location:./process.php');
	/* include('../conn.php');
	
$query="insert into tbbanknm(bname) values('$bn')";
if(mysqli_query($conn,$query))
{
	echo "<script type='text/javascript'>alert('Bank Added');</script>";
									header('location:./bank.php');
										
} */
		}
	}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:../user/index.php');
}
?>
	
		

	
