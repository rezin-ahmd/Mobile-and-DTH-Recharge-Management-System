
<html>
<head>

<title>Recharge Hub</title>

<?php
session_start();
   
   if (isset($_SESSION['name']))
   {
      $name= $_SESSION['name'];
	  echo $name ."<br>";
	  echo "<a href='../logout.php'>LOGOUT</a><br>";
	  }
if(isset($_POST['back']))
{
header('location:./dthrecharge.php');
}
?>
</head>

<body>

                       <form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table width="100%" border="1" align="left" cellpadding="0" cellspacing="0">
                                <tr>
<th>AMMOUNT</th>                                 


<th>VALIDITY</th>



                              
							  </tr>
							  <?php
include('../conn.php');
/*if(isset($_GET['getapnt']))
{
header('location:./appointmentt.php');
$del_id=$_GET['getapnt'];
$query=("delete from tbusr where id =$del_id");
if(mysqli_query($conn,$query))
{
echo "<script type='text/javascript'>alert ('user id $del_id id deleted');</script>";
}
else
{
print "error deleted record:".mysqli_error($conn);
}
 }*/


 $query="select * from dthoffrs";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$ammount=$row[1];
$validity=$row[2];



print "
<td align='center'>$ammount</td>
<td align='center'>$validity</td>

</tr>";
}
?>
							</table>
							   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="28%" height="30" align="left" valign="bottom"><input type="submit" name="back" value="Back"/></td>
                                       
                                      </tr>
                                  </table>
                            </form> 
                                      
                                      
</body>
</html>