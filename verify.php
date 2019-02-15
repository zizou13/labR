<?php 
   //Connexion
   
   
   $pseudo = $_POST['pseudo'];
   $password = $_POST['password'];

   if(is_ok($pseudo,$password))
   	  {
   	  	session_start();
   	  	$_SESSION['valid_user'] = 1;
   	  	$_SESSION['pseudo'] = $pseudo;
   	  	header('location:index.php');
   	  }
   	  else
   	  	header('location:login.php');
       
   
  function is_ok($pseudo,$password){
      $bdd = new PDO('mysql:host=localhost;dbname=lrit;charset=utf8','root','');
      $reponse = $bdd->query("Select *  from utilisateur where pseudo = '".$pseudo."' And password = '".md5($password)."'");
      $donnees = $reponse->fetch();
      return isset($donnees['pseudo']);
   }
 ?>