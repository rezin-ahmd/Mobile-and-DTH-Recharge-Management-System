<?php
include('../conn.php');

$mnumErr=$rcamtErr=$oprtrErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$selected_radio=$_POST['card'];
			if ($selected_radio=="cc")
							header('location:./ccpay.php');
				
			elseif ($selected_radio=="dc")
				header('location:./ccpay.php');
				
				
			elseif ($selected_radio=="ib")
				header('location:./selectbank.php');

	}
	
	if(isset($_POST['cancel']))
{
	$query1="select * from tbdthrc";
$result1=mysqli_query($conn,$query1);
			while($row1=mysqli_fetch_array($result1))
			 {
			 $id=$row1[0];
			 }
			 echo $id;
 $query="delete  from tbdthrc where id='$id'";
$result=mysqli_query($conn,$query);
header('location:../user/index.php'); 
}
?>