<?php 
 session_start();
 if($_SESSION['valid_user'] != 1)
 	header('location:login.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container" style="margin-top:30px;">
      <nav class="navbar navbar-default" style="padding-bottom: 40px;" id="container">
          <div class="container-fluid">
                 <div class="navbar-header">
                     <p class="navbar-brand"><?php echo "Bonjour ".$_SESSION['pseudo']; ?></p>
                 </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav navbar-right">
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="dex.php">Déconnexion</a></li>
                  </ul>
               </div><!-- /.navbar-collapse -->
           </div><!-- /.container-fluid -->
     
       	<div class="col-md-offset-3 col-md-6" style="border:#dadada 1px solid; padding:40px; border-radius: 20px;">
          	  <p id="mesPref" style="border-bottom:solid #eee 1px;">Vos préférences pour les prochaines navigations</p>
               <div class="form-group">
                   <label for="backColor">Background Color :</label>
                    <input type="color" class="form-control" id="backColor"  name="backColor">
               </div>
               <div class="form-group">
                    <label for="textColor">Text Color:</label>
                    <input type="color" class="form-control" id="textColor" placeholder="textColor" name="textColor">
               </div>
               <button class="btn btn-primary" onclick="submitPref();">Valider</button>
        </div>
      
       </nav>
    </div>
    <script type="text/javascript">
    	function submitPref(){
    		var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("mesPref").innerHTML = this.responseText;
                }
            };
            var backColor = encodeURIComponent(document.getElementById('backColor').value);
            var textColor = encodeURIComponent(document.getElementById('textColor').value);
            xhttp.open("GET", "setPref.php?backColor="+backColor+"&textColor="+textColor,true);
            xhttp.send();
    	 }
    </script>
    
 </body>
 </html>

 <?php 
    if(isset($_COOKIE['backColor']))
        {
          echo "<script>
                   document.getElementById('container').style.backgroundColor = '".$_COOKIE['backColor']."';
                     document.getElementById('container').style.color = '".$_COOKIE['textColor']."';
                </script>";

        }
     ?>