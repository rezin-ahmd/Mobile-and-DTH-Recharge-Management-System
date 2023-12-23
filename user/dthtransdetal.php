
<html>
<head>

<title>Recharge Hub</title>

<?php

 include('../conn.php');  

session_start();
      if (isset($_SESSION['name']))
      echo $_SESSION['name']."<br>";
 echo "<a href='../logout.php'>LOGOUT</a><br>";
 if(isset($_POST['done']))
{
header('location:./recharge.php');
}
?>
</head>

<body>
<big>Pay By Card</big> </td>
                        <form id="form2" name="form2" method="post" action="" style="margin:auto;">
						
                               
                          	<?php  
							if (isset($_SESSION['userlogin']))
   {
      $name= $_SESSION['userlogin'];
	  echo "NAME:".$name."<br>";
	
	  }
	  $query="select * from tbdthrc where name='$name'";
$result=mysqli_query($conn,$query);
			 while($row=mysqli_fetch_array($result))
			 {
			 $txn=$row[1];
			$num=$row[3];
			$oprtr=$row[4];
			$amt=$row[5]; 
			$status=$row[6];
			
			
			}
			 echo "TRNSACTION NUMBER:".$txn."<br>";
			 echo "CUSTOMER ID:".$num."<br>";
			  echo "OPERATOR:".$oprtr."<br>";
			   echo "AMOUNT:".$amt."<br>";
			    echo "STATUS:".$status."<br>";
	  ?>
                                 
	
	  <br><br>
								 
                            							    
							

								      

									  
                                       <input name="done" type="submit" value="DONE" /></td>
									   
                                      
</body>
</html>