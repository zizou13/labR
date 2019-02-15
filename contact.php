<?php 
  session_start();
  if($_SESSION['valid_user'] != 1)
 	 header('location:login.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Contact</title>
 	<meta charset="utf-8">
 </head>
 <body>
     Contact-us
 </body>
 </html>