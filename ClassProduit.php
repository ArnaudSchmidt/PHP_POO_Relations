<?php


//Classe Produit
class Produit{


	//Données Membres
	private $_Numproduit;
	private $_Des;
	private $_Puht;
	
	

	
	//Fcts Membres
	public function __construct($mNum,$mDes,$mPrix){

		//echo "Contructeur <br/>";
		$this->_Numproduit=$mNum;
		$this->_Des=$mDes;
		$this->_Puht=$mPrix;
	
	
	}

	public function __destruct(){
	

	}


	//Mutateurs

	public function getNumproduit(){


		return $this->_Numproduit;
	}

	public function getDes(){


		return $this->_Des;
	}

	public function getPrixht(){


		return $this->_Puht;
	}

	

	public function setNumproduit($mNum){

		if (is_numeric($mNum))
		{
			
			$this->_NumProduit=$mNum;
			
		}
		else
		{
			
			printf "Ce numéro de produit n'est pas valide.\n";
			
		}

	}

	public function setDes($mDes){

		if (is_string($mDes))
		{
			
			$this->_Des=$mDes;
			
		}
		else
		{
			
			printf "Cette désignation de produit n'est pas valide.\n";
			
		}

	}

	public function setPrix($mPrixht){

		if (is_numeric($mPrixht))
		{
			
			$this->_Puht=$mPrixht;
			
		}
		else
		{
			
			printf "Ce prix de produit n'est pas valide.\n";
			
		}
		

	}

	

	public function affiche(){

		echo $this->_Numproduit."<br/>";
		echo $this->_Des."<br/>";
		echo $this->_Puht."<br/>";
		
	}
	
	
	//hydratation de l'objet
	public function hydrate(array $donnees)
	{
		foreach ($donnees as $key => $value)
		{
			
			$method = 'set'.ucfirst($key);
        
			if (method_exists($this, $method))
			{
				
				$this->$method($value);
				$method = 'get'.ucfirst($key);
				
			}
		}
	}


}




?>