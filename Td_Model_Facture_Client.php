/<!--

01/06/2017
Hydratation d'objet : alimenter une instance de la classe
https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/manipulation-de-donnees-stockees

Le faire et mettre une classe manager sur client.
l'ensemble des primitives pour intéragir avec la bdd : connexion, requetes, maj
transformer les post get en objet

un hydrat pour chaque classe et un manager pour le client
le regiter sur la suite de la dernière fois "révision 2"
modifier le programme de test db

-->


<?php

include_once "ClassClient.php";
include_once "ClassFacture.php";
include_once "ClassProduit.php";
include_once "ClassDFacture.php";


?>


<?php


	//programme principal
	/*$mClient=new Client(1,"Nom","Prenom","adresse","cp","ville","Pays");

	$mClient->affiche();

	$date = new DateTime();
	 
	$mFacture=new Facture(1,$date->format('Y-m-d'),"CB");

	$mFacture->affiche();

	$mProduit=new Produit(1,"Des",10);

	$mProduit->affiche();

	$mQteProduitsFacture=new DFacture(50);

	$mQteProduitsFacture->affiche();*/

	$date = new DateTime();

	$mClient=new Client(1,"Nom","Prenom","adresse","cp","ville","Pays");

	$mProduit=new Produit(1,"Ecran 4k",400);

	//$qteProd1=new DFacture(10);

	$tProduit=new Produit(2,"test",100);

	$cProduit=new Produit(3,"toto",100);

	//$qteProd2=new DFacture(20);

	//$mProduit->addQteProduits($qteProd1,10);

	//$tProduit->addQteProduits($qteProd2,20);

	/*$arrObj=array();
	$arrObj[]=$mProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;
	$arrObj[]=$tProduit;*/

	$mFacture=new Facture(1,$date->format('Y-m-d'),"CB");

//for($i=0;$i<10;$i++){
		
		$mFacture->addProduits($mProduit,10);
	
	//}

	$mFacture2=new Facture(2,$date->format('Y-m-d'),"cheque");
	
	for($i=0;$i<5;$i++){
		
		$mFacture->addProduits($tProduit,20);
	
	}

		$mFacture->addProduits($cProduit,20);

	//$mFacture->affiche();

	$mClient->addFature($mFacture);

	$mClient->addFature($mFacture2);

	$mFacture2->addProduits($cProduit,20);


	$mClient->affiche();

	
	
	





















	/*$mClient->addFature($mFacture);

	$mClient->addFature($mFacture2);

	// Affichage des infos factures
  	foreach($mClient->getFactClient() as $valeur) {
 
    	echo $valeur->affiche() ,'<br/>';
  	}
 
	$mClient->affiche(1);*/

	//$mFacture->affiche();



	/*$_collectFacture=array();

	$_collectFacture[]=$mFacture;

	$_collectFacture[]=$mFacture2;

	echo $_collectFacture[0]->getReg();

	echo $_collectFacture[1]->getReg();*/









?>