<?php
session_start();
  if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  
	  }
	
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
$txnpass=trim($_POST["txnpass"]);		
		include('../conn.php');
		$query="SELECT * FROM tbcard WHERE txnpass='$txnpass' and name='$name'";
		$result=mysqli_query($conn,$query);
			 if (mysqli_num_rows($result) == 1)
			 {
				echo "<script type='text/javascript'>alert('Transaction Success');</script>";
				header("refresh:0;url='./proccess.php'");
	$query1="select * from tbrc";
$result1=mysqli_query($conn,$query1);
			while($row1=mysqli_fetch_array($result1))
			 {
			 $id=$row1[0];
			 }
			$query="update tbrc SET status = 'success' where id = '$id' ";
$result=mysqli_query($conn,$query);
echo "<script type='text/javascript'>alert('Transaction Success');</script>";
header('location:./backtopage.php');
			}
			else
			{
			echo "<script type='text/javascript'>alert('Invalid Transaction');</script>";
			}
		} 
		

	

	
	
if(isset($_POST['cancel']))
{
$query="update tbrc SET status = 'failed' where id = '$id' ";
$result=mysqli_query($conn,$query);
header('location:../user/index.php');
}
?>
	
		

	
