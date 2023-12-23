<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Netbank</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/arial.js"></script>
<script type="text/javascript" src="js1/cuf_run.js"></script>

<?php
include('transreg.php');
  
?>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
	<div align="right" >
		<?php
	if (isset($_SESSION['user']))
   {
      $nam= $_SESSION['user'];

	  echo "<font color='blue'>".$nam."</font><br>";
	
	 echo "<a href='../logout.php'><font color='#83f442'>LOGOUT</font></a>";
	  }
	  ?>
	  </div>
      <div class="logo">
	  
        <h1><a href="#"><span>Net</span><small>Bank</small></a></h1>
		
      </div>
     
      <div class="clr"></div>
    </div>
  </div>
  <div class="hbg">
    <div class="hbg_resize"> <img src="images1/hbg_im.jpg" width="500" height="258" alt="" class="hbgimg" />
    </div>
	
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Pay By Netbanking</h2>
          
        </div>
        <div class="article">
		
         
                          <center><form id="form2" name="form2" method="post" action="" style="margin:auto;">
                         <p>PLEASE ENTER YOUR  <?php if(isset($_SESSION['bnam']))
{
echo strtoupper($_SESSION['bnam']);
}
   ?> TRANSACTION PASSWORD. <br><br>    
                               <ol>
							   				<li>
                
				<input id="name" class="text" name="usr" type="hidden" placeholder="USERNAME" value="<?php  if (isset($_SESSION['bankuser'])){$name= $_SESSION['bankuser']; echo $name;}?>" style="width:250px; height:25px;"  />
				</li>
							    <li>
                <label for="email">  Account Holder:</label>
				<input id="name" class="text" name="" type="text" placeholder="USERNAME" value="<?php  if (isset($_SESSION['user'])){$name= $_SESSION['user']; echo $name;}?>" style="width:250px; height:25px;"  />
				</li>

             
              <li>
                <label for="password"> Transaction Password:</label>
				<input id="name" class="text" name="pwd" type="password" placeholder="PASSWORD" style="width:250px; height:25px;"  />
                              <span style="color:red;"> *<?php echo $pwdErr;?></span>
				<br></br>
             
              </li>
              
              <li>
			    <input name="mktrans" type="submit" value="Transfer" />
                               <input name="cancel" type="submit" value="Cancel" />     
           
                <div class="clr"></div>
              </li>
            </ol>
          </form>
		  </center>   
                 </div>
      </div>
      
      <div class="clr"></div>
    </div>
  </div>
 
  <div class="footer">
    <div class="footer_resize">
      
      <ul class="fmenu">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li class="active"><a href="#"></a></li>
      </ul>
    </div>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
