<?php

//Classe DFacture

class DFacture{


	//Données Membres
	private $_Qte;
	private $_Fact;
	private $_Produit;
	

	//Fcts Membres

	
	public function __construct(){

		
	
	}

	public function hydrate(array $donnees)	{ //hydratation 
  		foreach ($donnees as $key => $value) {
		    $method = 'set'.ucfirst($key);

    if (method_exists($this, $method)) {
      $this->$method($value);
    		}
  		}
	}

	public function __destruct(){

		

	}


	//Mutateurs

	public function getQte(){


		return $this->_Qte;
	}

	
	public function setQte($mQte){

		$this->_Qte=$mQte;

	}

	public function setFact(Facture $mFact){


		 $this->_Fact=$mFact;
	}

	public function setProduit(Produit $mProd){


		 $this->_Produit=$mProd;
	}

	
	public function affiche(){

		echo $this->_Qte."<br/>";
		
		
	}

	
	
}







?>