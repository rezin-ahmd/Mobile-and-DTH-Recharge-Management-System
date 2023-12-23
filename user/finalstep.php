<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Netbank</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/arial.js"></script>
<script type="text/javascript" src="js1/cuf_run.js"></script>
<?php

include('fnlstp.php');

?>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
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
          <h2>Pay By Card</h2>
          
        </div>
        <div class="article">
		
         
                          <center><form id="form2" name="form2" method="post" action="" style="margin:auto;">
						
                               <ol>
							    <li>
                <label for="email">Name:</label>
				<?php  
							if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  echo strtoupper($name);
	
	  }?>
				
             
              </li>
             
              <li>
                <label for="password">Transaction Password:</label>
				<input id="name" class="text" name="txnpass" type="password" placeholder="PASSWORD"value=""  style="width:250px; height:25px;" />
								  <span style="color:red; font-family:Times New Roman; font-size:12px;"></span>
				
				<br></br>
             
              </li>
              
              <li>
			     <input name="prcd" type="submit" value="PROCEED" />
                                       <input name="cancel" type="submit" value="CANCEL" />
           
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