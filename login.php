
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

<?php
include('logreg.php');
?>
</head>

<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li  class="selected">
						<a href="login.php">Login</a>
					</li>
					<li>
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
							<h1>Login</h1>
                          <form id="form2" name="form2" method="post" >
                           <table>
									<tbody>
										<tr>
											<td> Username:</td>
											<td>
											<input name="usr" type="text" placeholder="USERNAME"  class="txtfield"  />
									<span style="color:red;"> *<?php echo $usrErr;?></span>
									</td>
										</tr> 
										<tr>
											<td> Password:</td>
										
											<td><input name="pwd" type="password" placeholder="PASSWORD"  class="txtfield" />
                              <span style="color:red;"> *<?php echo $pwdErr;?></span>
											
										</tr> 
										 <tr>
											<td></td>
											<td>
											 <input name="login" type="submit" value="Login" class="btn" />
											 <input name="signup" type="submit" value="Register" class="btn"/>    
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