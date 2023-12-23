<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Recharge Hub</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<?php
session_start();
	?></head>
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
						
						<li  >
						<a href="rchistory.php">Mobile </a>
					</li >
					<li>
						<a href="dthhistory.php">DTH </a>
					</li>
						
					</ul>
				</div>
			</div>
			<div id="contents">
				<div id="adbox">
					<img src="images/recharge_banner.png" alt="Img">
					<h1>Easy Recharge</h1>
					<p>
						No need to rush to the market for DTH Recharge or Mobile Bill Payment, just login to Paytm and make immediate payments. Cherish your experience with exciting Cashback and Discounts on every recharge or bill payment you make with us. Our online recharge and bill payment service is a one-stop solution for fast & easy Prepaid Mobiles, DTH & Data Card recharge and Postpaid Mobiles & Data Cards Bill Payment. Effortlessly make payments through our safe methods, processed through secured gateways.
					</p>
				</div>
				<div id="main">
					<div class="box">
						<div>
							<div>
								<h3>Services</h3>
								<ul>
									<li>
										<h4><a href="login.php">Mobile Recharge</a></h4>
										<span></span>
										<p>
											Airtel Recharge | Vodafone Recharge | Aircel Recharge | BSNL Recharge |Idea Recharge | Reliance GSM Recharge | Tata Docomo GSM Recharge | Tata Docomo CDMA Recharge | MTS Recharge | Reliance CDMA Recharge 
										</p>
									</li>
									<li>
										<h4><a href="news.html">DTH Recharge</a></h4>
										<span></span>
										<p>
											Airtel Digital Recharge | TataSky Recharge | Dishtv Recharge | Videocon d2h Recharge | Reliance Digital Tv Recharge | Sun Direct Recharge
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="testimonials" class="box">
						<div>
							<div>
								<h3>Live, Laugh, Enjoy</h3>
								<p>
									Relive the moment and revive your daily routine with an amazing experience at an incredible amusement park. Book tickets for theme parks & water parks in seconds at Paytm.com and get ready to make your day an adventurous one. 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div id="sidebar">
					<div class="section">
						<a href="#"><img src="images/airtel.png" alt="Img"></a>
					</div>
					<div class="section">
						<a href="#"><img src="images/vodafone.png" alt="Img"></a>
					</div>
					<div class="section">
						<a href="#"><img src="images/docomo.png" alt="Img"></a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
											<li  >
						<a href="rchistory.php">Mobile </a>
					</li >
					<li>
						<a href="offers.php">DTH </a>
					</li>

				</ul>
				
			</div>
			<p>
				
			</p>
		</div>
	</div>
</body>
</html>
</html>