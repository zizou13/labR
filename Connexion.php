<?php 
  /**
   * 
   */
  class Connexion
  {
    private $bdd;	
  	function __construct($host,$root,$password)
  	{
  	    try
         {
	         $this->bdd = new PDO($host,$root,$password);
         }
       catch(Exception $e)
        {
             die('Erreur : '.$e->getMessage());
        } 
  	}
  	public function getBdd(){
  		return $this->bdd;
  	}
  }

 ?>