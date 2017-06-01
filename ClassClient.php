
<?php

//classe Client
class Client{


	//Données Membres
	private $_Idclient;
	private $_Nom;
	private $_Prenom;
	private $_Adresse;
	private $_Cp;
	private $_Ville;
	private $_Pays;

	
	private $_collectFacture=array();
	

	//Fcts Membres

	
	public function __construct($mId,$mNom,$mPrenom,$mAdr,$mCp,$mVille,$mPays){

		//echo "Contructeur <br/>";
		$this->_Idclient=$mId;
		$this->_Nom=$mNom;
		$this->_Prenom=$mPrenom;
		$this->_Adresse=$mAdr;
		$this->_Cp=$mCp;
		$this->_Ville=$mVille;
		$this->_Pays=$mPays;
		

	
	}

	public function __destruct(){

		

	}



	//Mutateurs

	public function getId(){


		return $this->_IdClient;
	}

	public function getNom(){


		return $this->_Nom;
	}

	public function getPrenom(){


		return $this->_Prenom;
	}

	public function getAdresse(){


		return $this->_Adresse;
	}

	public function getCp(){

		return $this->_Cp;
	}


	public function getVille(){

		return $this->_Ville;

	}

	public function getPays(){

		return $this->_Pays;

	}

	public function setIdclient($mId){

		if (is_string($mId))
		{
			
			$this->_Idclient=$mId;
			
		}
		else
		{
			
			printf "Cet identifiant de client n'est pas valide.\n";
			
		}

	}

	public function setNom($mNom){

		if (is_string($mNom))
		{
			
			$this->_Nom=$mNom;
			
		}
		else
		{
			
			printf "Ce nom de client n'est pas valide.\n";
			
		}


	}

	public function setPrenom($mNom){

		if (is_string($mNom))
		{
			
			$this->_Nom=$mNom;
			
		}
		else
		{
			
			printf "Ce nom de client n'est pas valide.\n";
			
		}
		$this->_Prenom=$mPrenom;

	}

	public function setAdresse($mAdresse){

		if (is_string($mAdresse))
		{
			
			$this->_Adresse=$mAdresse;
			
		}
		else
		{
			
			printf "Cette adresse n'est pas valide.\n";
			
		}

	}

	public function setCp($mCp){

		if (is_string($mCp))
		{
			
			$this->_Cp=$mCp;
			
		}
		else
		{
			
			printf "Ce code postal n'est pas valide.\n";
			
		}

	}

	public function setVille($mVille){

		if (is_string($mVille))
		{
			
			$this->_Ville=$mVille;
			
		}
		else
		{
			
			printf "Ce nom de ville n'est pas valide.\n";
		
		}

	}

	public function setPays($mPays){

		if (is_string($mPays))
		{
			
			$this->_Pays=$mPays;
			
		}
		else
		{
			
			printf "Ce nom de pays n'est pas valide.\n";
		
		}

	}

	public function affiche(){

		echo $this->_IdClient."<br/>";
		echo $this->_Nom."<br/>";
		echo $this->_Prenom."<br/>";
		echo $this->_Adresse."<br/>";
		echo $this->_Cp."<br/>";
		echo $this->_Ville."<br/>";
		echo $this->_Pays."<br/>";
		//echo $this->_collectFacture[$i]->affiche();"<br/>";

		// Affichage des produits dans la facture
  		foreach(self::getFactClient() as $valeur) {
 
    		echo $valeur->affiche().'<br/>';
    			
  		}

	}



	public function getFactClient(){

		return $this->_collectFacture;

	}

	public function addFature(Facture $mCollection){

		if (!in_array($mCollection,$this->_collectFacture)){
			$mCollection->setClient($this);
			$this->_collectFacture[]=$mCollection;
		}
		
			

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