<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
session_start();
if(isset($_POST['back']))
{
header('Location:../admin/index.php');

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
						<li>
							<a href="index.php">Home</a>
						</li>
						<li >
							<a href="approve.php">User List</a>
						</li>
						<li  >
						<a href="bank.php">Bank</a>
					</li >
					<li>
						<a href="offers.php">Offers</a>
					</li>
					<li>
						<a href="oprtr.php">Operators</a>
					</li>
					
					<li  class="selected">
						<a href="complaints.php">Complaints</a>
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
                              <table>
							  <tbody>
                                <tr>
<th>COMPLAINT No.</th>                                 
<th>NAME</th>
<th>MOBILE NUMBER</th>
<th>E-MAIL</th>
<th>COMPLAINT</th>


                              
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


 $query="select * from tbcomplaints";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$compnum=$row[1];
$name=$row[2];
$cntnum=$row[3];
$email=$row[5];
$complaint=$row[4];

print "
<td align='center'>$compnum</td>
<td align='center'>$name</td>
<td align='center'>$cntnum</td>
<td align='center'>$email</td>
<td align='center'>$complaint</td>
</tr>";
}
?>
							<tr>
							</tr>
							
                                      <tr>
									  <td></td>
                                        <td><input type="submit" name="back" value="Back" class="btn"/></td>
                                       
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
						<a href="index.php">Home</a>
					</li>
					<li >
							<a href="approve.php">User List</a>
						</li>
						<li  >
						<a href="bank.php">Bank</a>
					</li >
					<li>
						<a href="offers.php">Offers</a>
					</li>
					<li>
						<a href="oprtr.php">Operators</a>
					</li>
					<li class="active">
						<a href="complaints.php">Complaints</a>
					</li>
				</ul>
				
			</div>
	</div>
</body>
</html>