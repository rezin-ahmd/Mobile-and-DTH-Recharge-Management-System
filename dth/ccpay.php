<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
include('ccreg.php');
   
   
?>
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
						<a href="history.php">History</a>
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
						<h1>Mobile Recharge</h1>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						                            <table>
									<tbody>
									
										<tr>
											<td>Card Number:</td>
											<td>
											 <input name="cnum" type="text" value="<?php if ((isset($cnum))&&($cnumErr==false)){echo $cnum;}?>"  class="txtfield" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cnumErr;?></span>
								  </td>
										</tr> 
										<tr>
											<td>Expiry Date:</td>
											<td>
											<input name="exp1" type="text" placeholder="MONTH" value="<?php if ((isset($exp1))&&($exp1Err==false)){echo $exp1;}?>"  class="txtfield" style="width:60px;"/>
                                	<span style="color:red; font-family:Times New Roman; font-size:12px;"><?php echo $exp1Err;?></span>
									<input name="exp2" type="text" placeholder="YEAR" value="<?php if ((isset($exp2))&&($exp2Err==false)){echo $exp2;}?>"  class="txtfield" style="width:60px;" />
                                	<span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $exp2Err;?></span>
									</td>
										</tr> 
										<tr>
											<td>CVV:</td>
											<td>
											 <input name="cvv" type="text" placeholder="CVV"value="<?php if ((isset($cvv))&&($cvvErr==false)){echo $cvv;}?>"  class="txtfield" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cvvErr;?></span>
																			
									</td>
										</tr> 
										 <tr>
											<td></td>
											<td>
											 <input name="prcd" type="submit" value="Proceed" class="btn"/>
                                       <input name="cancel" type="submit" value="Cancel" class="btn"/>
											
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
					<li >
							<a href="../user/recharge.php">Mobile</a>
						</li>
						<li  class="active">
							<a href="dthrecharge.php">DTH</a>
						</li>
						<li  >
						<a href="history.php">History</a>
					</li >
					
					<li >
						<a href="complaints.php">Complaint</a>
					</li>
				</ul>
				
			</div>
	</div>
</body>
</html>