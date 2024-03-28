<?php
/*
// Definition d'une classe avec ses proprietes et une methode pour afficher les details de la voiture
class Voiture extends Vehicle implements Reparable{
 
  public function klaxonner(){  //ajout de la methode klaxonner
       var_dump ("Je klaxonne ");
  }

  public function reparer(){
      echo "Ceci est la fonction reparer";      //Fonction reparer
  }

 
}
//instancier une classe 
$Voiture1 = new Voiture ('BMW','2145','2154km',2018);
//mettre à jour
$Voiture1->setMarque('Toyota'); 
$Voiture1->setModele('corolla');
$Voiture1->setKilometrage(1450000);
$Voiture1->setAnnee(2012);
$Voiture1->afficher();
echo '<br>';
$Voiture1->klaxonner();
echo '<br>'; 
$Voiture1->demarrer();  

class  Vehicle { 
  private $marque;
  private $modele;
  private $kilometrage;
  private $annee ;

  public function __construct($marque,$modele,$kilometrage,$annee){
     $this->setMarque($marque);
     $this->setModele($modele);
     $this->setKilometrage($kilometrage);
     $this->setAnnee($annee);

  }
  public function getMarque()
  {
    return $this->marque;
  }
  public function getModele()
  {
    return $this->modele;
  }
  public function getKilometrage()
  {
    return $this->kilometrage;
  }
  public function getAnnee()
  {
    return $this->annee;
  }
  public function setMarque($marque)
  {
    $this->marque = $marque;
  }
  public function setModele($modele)
  {
    $this->modele = $modele;
  }
  public function setKilometrage($kilometrage)
  {
    $this->kilometrage = $kilometrage;
  }
  public function setAnnee($annee)
  {
    $this->annee = $annee;
  }   // la classe Voiture herite la classe vehicle
 
  public function demarrer(){   //creation de la methode demarrer
   echo "C'est la fonction redémarrer";
  }
  public function afficher(){
    echo "La marque  est $this->marque, le modele est $this->modele,le kilometrage est de $this->kilometrage,l'annee de creation est $this->annee ";
  }
}
Interface Reparable{
  public function reparer();
}
Class Moto extends Vehicle{

}

//instance moto
$moto_1 = new Moto('Beverly', 'Beverly500', 255000, '2022');
echo '<br>';
$moto_1->afficher();