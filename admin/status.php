<?php
include('../conn.php');
$status=trim($_GET['status']);
$id=trim($_GET['id']);
if($status=='0')
{
mysqli_query($conn,"UPDATE tbusr SET act='1' WHERE id='$id'");
echo "<script type='text/javascript'>alert('you have activated an account');</script>";
header("refresh:0;url='./approve.php'");
}
else
{
mysqli_query($conn,"UPDATE tbusr SET act='0' WHERE id='$id'");
echo "<script type='text/javascript'>alert ('you have de activated an acccount');</script>";
header ("refresh:0; url='./approve.php'");
}
?>