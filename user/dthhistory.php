<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
session_start();
   
   if (isset($_SESSION['name']))
   {
   
      $name= $_SESSION['name'];
	   $uname= $_SESSION['userlogin'];
	  
	  }
if(isset($_POST['back']))
{
header('location:../user/index.php');
}
?>
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
			<div align="right" ><?php if (isset($_SESSION['name']))
      echo "<font color='blue'>".$_SESSION['name']."</font><br><br>";
	  echo "<a href='../logout.php'><font color='#83f442'>LOGOUT</font></a>";
?>
</div>
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="150"></a>
				</div>
				<div id="navigation">
					<ul>
						
						<li  >
						<a href="rchistory.php">Mobile</a>
					</li >
					<li class="selected" >
						<a href="dthhistory.php">DTH</a>
					</li>
					
						
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
					
						<div id="table" class="body">
						<h1>Complaints</h1>
						<form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table align="center">
							  <tbody>
                                <tr>
<th width="25%">TRANSACTION No.</th>                                 
<th width="30%">DTH ID</th>
<th width="20%">OPERATOR</th>
<th width="30%">AMMOUNT</th>
<th width="30%">STATUS</th>




                              
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


 $query="select * from tbdthrc where name='$uname'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$txn=$row[1];
$dthid=$row[3];
$oprtr=$row[4];
$amt=$row[5];
$sts=$row[6];


print "
<td align='center'>$txn</td>
<td align='center'>$dthid</td>
<td align='center'>$oprtr</td>
<td align='center'>$amt</td>
<td align='center'>$sts</td>

</tr>";
}
?>
						
                    	</table>					
			<table >
							<tr></tr>
                                      <tr>
									  
									 <td align="left"> <input type="submit" name="back" value="Back" class="btn"/></td>
                                      
                                       
                                      </tr>
									  </tbody>
                                  </table>
                            </form> 
<h2></h2>
						
							<p><img src="images/banner.jpg" alt="Img"></p>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li >
						<a href="rchistory.php">Mobile</a>
					</li >
					<li class="active" >
						<a href="dthhistory.php">DTH</a>
					</li>
				</ul>
				
			</div>
	</div>
</body>
</html>