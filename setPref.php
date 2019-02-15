<?php 
   $backColor = $_GET['backColor'];
   $textColor = $_GET['textColor'];
   setcookie("backColor", $backColor, time() + 3600);
   setcookie("textColor", $textColor, time() + 3600);
   echo "Vos Préferences de coleur(background:".$backColor."text:".$textColor.")";
 ?>