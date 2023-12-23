
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
include('compreg.php');
session_start();
?>
</head>

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
					
					<li class="selected" >
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
						                            <table>
									<tbody>
									<tr>
									<td> Name:</td>
											<td>
											 <input name="nm" type="text" value="<?php if ((isset($name))&&($nameErr==false)){echo $name;}?>"  class="txtfield" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $nameErr;?></span>

										</td>
										</tr>
										<tr>
											<td>Contact</td>
											<td>
											<input name="cnt" type="text" value="<?php if ((isset($cnt))&&($cntErr==false)){echo $cnt;}?>"  class="txtfield" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cntErr;?></span>
								</td>
										</tr> 
										<tr>
											<td>E-Mail:</td>
											<td>
											<input name="eml" type="text" value="<?php if ((isset($eml))&&($emlErr==false)){echo $eml;}?>"  class="txtfield" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $emlErr;?></span>
								</td>
										</tr> 
										<tr>
											<td>Complaint:</td>
											<td>
											<textarea name="cmp"  value="<?php if ((isset($cmp))&&($cmpErr==false)){echo $cmp;}?>"   class="txtfield" style="width:280px; height:80px;" ></textarea>
                               <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cmpErr;?></span>
										
								</td>
										</tr>
										 <tr>
											<td></td>
											<td>
											<input name="signup" type="submit" value="Send"  class="btn"/>
                                       <input name="cancel" type="submit" value="Cancel"  class="btn"/>
											
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
							<a href="recharge.php">Mobile</a>
						</li>
						<li >
							<a href="../dth/dthrecharge.php">DTH</a>
						</li>
						<li  >
						<a href="history.php">History</a>
					</li >
					
					<li  class="active">
						<a href="complaints.php">Complaint</a>
					</li>
						
					</ul>
				
			</div>
	</div>
</body>
</html>