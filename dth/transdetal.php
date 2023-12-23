
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

<?php

 include('../conn.php');  

session_start();

 if(isset($_POST['done']))
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
						<li >
							<a href="recharge.php">Mobile</a>
						</li>
						<li>
							<a href="../dth/dthrecharge.php">DTH</a>
						</li>
						<li  >
						<a href="history.php">History</a>
					</li >
					
					<li  >
						<a href="complaints.php">Complaint</a>
					</li>
						
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
					
						<div id="contact" class="body">
						<h1>Mobile Recharge</h1>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						<table align="center">
							  <tbody>
                                <tr>
                               
                          	<?php  
							if (isset($_SESSION['name']))
   {
      $name= $_SESSION['name'];
	  echo "NAME:".$name."<br>";
	}
	  
	  $query="select * from tbdthrc where name='$_SESSION[userlogin]'";
$result=mysqli_query($conn,$query);
			 while($row=mysqli_fetch_array($result))
			 {
			 $txn=$row[1];
			$num=$row[3];
			$oprtr=$row[4];
			$amt=$row[5]; 
			$status=$row[6];
			
			
			}
			
			 echo "TRNSACTION NUMBER:".$txn."<br>";
			 echo "MOBILE NUMBER:".$num."<br>";
			  echo "OPERATOR:".$oprtr."<br>";
			   echo "AMOUNT:".$amt."<br>";
			    echo "STATUS:".$status."<br>";
				
	  ?>
                                 
	
	 <br><br></table>					
			<table >
							<tr></tr>
                                      <tr>
									  
									 <td align="left"><input name="done" type="submit" value="DONE"  class="btn"/><td>
                                      
                                       
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
					
					<li >
						<a href="complaints.php">Complaint</a>
					</li>
				</ul>
				
			</div>
	</div>
</body>
</html>