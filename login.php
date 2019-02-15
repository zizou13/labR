<?php  
session_start();
if(isset($_SESSION['valid_user']))
 {if($_SESSION['valid_user'] == 1)
  header('location:index.php');}
?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 	<link href="../td1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 </head>
 <body>
   <div class="container">
     <div style="margin-top:25%;">	
       	<div class="col-md-offset-3 col-md-6" style="border:#dadada 1px solid; padding:40px; border-radius: 20px;">
          <form method="POST" action="verify.php">
               <div class="form-group">
                   <label for="pseudo">Pseudo :</label>
                    <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Enter pseudo" name="pseudo">
               </div>
               <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
               </div>
               <button  class="btn btn-primary">Submit <i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
 </body>
 </html>