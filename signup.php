
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

<?php
include('signreg.php');
?>
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="150"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li  >
						<a href="login.php">Login</a>
					</li >
					<li class="selected">
						<a href="signup.php">Sign Up</a>
					</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Sign Up</h1>
                        <form id="form2" name="form2" method="post" action="">
						<table>
									<tbody>
										<tr>
											<td>  Name:</td>
											<td>
											
                                 <input name="fnm" type="text" value="<?php if ((isset($name))&&($nameErr==false)){echo $name;}?>" class="txtfield"  style="width:250px; height:20px;" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $nameErr;?></span>
											
									</td>
										</tr> 
										<tr>
											<td> User Name:</td>
										<td>
											<input name="usr" type="text"  value="<?php if ((isset($usrname))&&($usrErr==false)){echo $usrname;}?>" class="txtfield" style="width:250px; height:20px;" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $usrErr;?></span>
																					
										</tr> 
										<tr>
											<td>Contact Number:</td>
										<td>
										<input name="cnt" type="text" value="<?php if ((isset($cnt))&&($cntErr==false)){echo $cnt;}?>" class="txtfield" style="width:250px; height:20px;" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cntErr;?></span>
											
																					
										</tr> 
										<tr>
											<td>Password:</td>
										<td>
										<input name="password" type="password" value=""class="input3" class="txtfield" style="width:250px; height:20px;" />
                               <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $pwdErr;?></span>
								
										</tr> 
										<tr>
											<td> Confirm Password:</td>
										<td>
										 <input name="cpassword" type="password" value="" class="txtfield" style="width:250px; height:20px;" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $cpwdErr;?></span>
											
										</tr> 
										 <tr>
											<td></td>
											<td>
											<input name="signup" type="submit" value="Register" class="btn"/>
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
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
					<li>
						<a href="signup.php">Sign Up</a>
					</li>
					<li class="active">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
				
		</div>
	</div>
</body>
</html>
							  
                                    
                                      
                          
                  
         
  </tr>
</table>
</body>
</html>