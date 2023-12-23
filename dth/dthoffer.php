<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
session_start();
 
if(isset($_POST['back']))
{
header('location:./dthrecharge.php');
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
						<li >
							<a href="../user/recharge.php">Mobile</a>
						</li>
						<li  class="selected">
							<a href="dthrecharge.php">DTH</a>
						</li>
						<li  >
						<a href="../user/history.php">History</a>
					</li >
					
					<li >
						<a href="../user/complaints.php">Complaint</a>
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
<th width="40%">AMMOUNT</th>                                 


<th width="40%">VALIDITY</th>



                              
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
			<table >
							<tr></tr>
                                      <tr>
									  
									 <td align="left"><input type="submit" name="back" value="Back" class="btn"/><td>
                                      
                                       
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
						</div>
<div id="navigation">
					<ul class="navigation">
						<li >
							<a href="../user/recharge.php">Mobile</a>
						</li>
						<li  class="active">
							<a href="dthrecharge.php">DTH</a>
						</li>
						<li  >
						<a href="../user/history.php">History</a>
					</li >
					
					<li >
						<a href="../user/complaints.php">Complaint</a>
					</li>
						
					</ul>
				</div>
</body>
</html>