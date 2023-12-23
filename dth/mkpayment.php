<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
session_start();
include('../conn.php');
include('payreg.php');
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
						<li  class="selected">
							<a href="recharge.php">Mobile</a>
						</li>
						<li >
							<a href="../dth/dthrecharge.php">DTH</a>
						</li>
						<li  >
						<a href="bank.php">Bank</a>
					</li >
					<li >
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
					
						<div id="contact" class="body">
						<h1>Payment Mathod</h1>

                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
                              <table>
									<tbody>
									<tr>
									<td>Credit Card</td>
											<td>
											 <input type="radio"name="card"value="cc" checked>

										</td>
										</tr>
										<tr>
											<td>Debit Card</td>
											<td>
											 <input type="radio"name="card"value="dc">

										</td>
										</tr> 
										<tr>
											<td>Internet</td>
										<td>
										 <input type="radio"name="card"value="ib">
										</td>
										</tr> 
										
										
											<td></td>
											<td>
											<input name="next" type="submit" value="Next" class="btn" />
<input name="cancel" type="submit" value="Cancel" class="btn" />
											
										</td>
										</tr>
									</tbody>
								</table>
                             </form>
<h2>Recharge Hub</h2>
						<p><img src="images/rechargeimg.png" alt="Img"></p>
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
					<li >
							<a href="approve.php">User List</a>
						</li>
						<li  >
						<a href="bank.php">Bank</a>
					</li >
					<li>
						<a href="offers.php">Offers</a>
					</li>
					<li  class="active">
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