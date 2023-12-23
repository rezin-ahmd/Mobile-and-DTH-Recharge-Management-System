<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
include('dthofrreg.php');
include('../conn.php');
session_start();
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
					<li  class="selected">
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
						<h1>Add DTH Offers</h1>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
												<table>
									<tbody>
										<tr>
											<td>Ammount:</td>
											<td>
											<input name="rcamt" type="text" value="<?php if ((isset($rcamt))&&($rcamtErr==false)){echo $rcamt;}?>"  class="txtfield"/>
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $rcamtErr;?></span>
										</td>
										</tr> 
										<tr>
											<td>Valadity:</td>
											<td>
											<input name="val" type="text" value="<?php if ((isset($val))&&($valErr==false)){echo $val;}?>"  class="txtfield" />
                                <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $valErr;?></span>

									</td>
										</tr> 
										
										<tr>
											<td>Operator:  </td>
										<td>
										<select name="oprtr" value="<?php if ((isset($oprtr))&&($oprtrErr==false)){echo $oprtr;}?>"  class="txtfield">
                    <option value="">---Please Select Your Operator---</option>
        	        <?php
					 $query="select * from tbdthoprtr";
					$result=mysqli_query($conn,$query);
					  while($array = mysqli_fetch_array($result))
			  {
				echo "<option value='$array[1]'>$array[1]</option>";
			  }
			  ?>
      	            </select>

                      <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $oprtrErr;?></span>
										</td>
										</tr> 
										 <tr>
											<td></td>
											<td>
											<input name="signup" type="submit" value="Add" class="btn"/>
                                       <input name="cancel" type="submit" value="Cancel"class="btn" />
									
										</td>
										</tr>
										
										<tr>
										<td >
										<a  href="offers.php">Back</a></td>
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
					<li class="active">
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
</body>
</html>