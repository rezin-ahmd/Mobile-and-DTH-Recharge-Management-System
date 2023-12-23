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
						<li  class="selected">
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
					<li >
						<a href="complaints.php">Complaints</a>
					</li>
						
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="table" class="body">
							<h1>User List</h1>
                         
							<form id="form2" name="form2" method="post" action="" >
                              <table>
							  <tbody>
                                <tr>
 <th>ID </th>
<th>NAME</th>
<th>USERNAME </th>
<th>PASSWORD</th>
<th>A/C STATUS </th>
<th>DELETE </th>
                              
							  </tr>
							  <?php
include('../conn.php');
if(isset($_GET['del']))
{
$del_id=$_GET['del'];
$query=("delete from tbusr where id =$del_id");
if(mysqli_query($conn,$query))
{
echo "<script type='text/javascript'>alert ('user id $del_id id deleted');</script>";
}
else
{
print "error deleted record:".mysqli_error($conn);
}
}$query="select* from tbusr";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
$showid=$row[0];
$showname=$row[1];
$showusername=$row[2];
$showpassword=$row[3];
$showstatus=$row[6];
print "<tr align='center'>
<td>$showid</td>
<td>$showname</td>
<td>$showusername</td>
<td>$showpassword</td>";
?>

<?php print "<td>";
if($showstatus==0)
{
echo "<a href='status.php?status=$showstatus &id=$showid' id='inactive'>inactive";
}
else
{
echo "<a href='status.php? status=$showstatus &id=$showid' id='active'> active";
}
?>
<?php print "</td>
<td><a href='approve.php? del=$showid'>delete </td>
</tr>";
}
?>
							  <tr>
							  </tr>
							  <tr>
											<td></td>
											<td>
											 <input type="submit" name="back" value="Back" class="btn"/>

											</td>
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
					<li>
						<a href="index.php">Home</a>
					</li>
					<li  class="active">
							<a href="approve.php">User List</a>
						</li>
						<li  >
						<a href="bank.php">Bank</a>
					</li >
					<li>
						<a href="offers.php">Offers</a>
					</li>
					<li >
						<a href="oprtr.php">Operators</a>
					</li>
					<li >
						<a href="complaints.php">Complaints</a>
					</li>
				</ul>
				
			</div>
	</div>
</body>
</html>