
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

<?php
session_start();

include('dthrcreg.php');
include('../conn.php');
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
					<a href="../user/index.php"><img src="images/logo.png" alt="LOGO" height="112" width="150"></a>
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
					
						<div id="contact" class="body">
						<h1>Mobile Recharge</h1>

                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						    
                             
                            <table>
									<tbody>
									<tr>
									<td></td>
											<td>
											 <input name="nam" type="hidden" value="<?php if (isset($_SESSION['userlogin'])){$name= $_SESSION['userlogin'];echo $name;}?>" class="txtfield" />
											

										</td>
										</tr>
										<tr>
											<td>  DTH Customer Id:</td>
											<td>
											 <input name="dthid" type="text" value="<?php if ((isset($dthid))&&($dthidErr==false)){echo $dthid;}?>"  class="txtfield" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $dthidErr;?></span>
								  </td>
										</tr> 
										 
										<tr>
											<td>Operator:  </td>
										<td>
										<select name="oprtr" value="<?php if ((isset($oprtr))&&($oprtrErr==false)){echo $oprtr;}?>" class="txtfield">
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
											<td>Ammount:</td>
											<td>
											<input name="rcamt" type="text" value="<?php if ((isset($rcamt))&&($rcamtErr==false)){echo $rcamt;}?>" class="txtfield" />
                                	<span style="color:red; font-family:Times New Roman; font-size:12px;">*<?php echo $rcamtErr;?></span><a href="dthoffer.php">Show Offers</a>
									

										</td>
										</tr> 
										 <tr>
											<td></td>
											<td>
											<input name="next" type="submit" value="Next" class="btn"/>
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
						<a href="../user/history.php">History</a>
					</li >
					
					<li >
						<a href="../user/complaints.php">Complaint</a>
					</li>
						
					</ul>
				
			</div>
	</div>
</body>
</html>