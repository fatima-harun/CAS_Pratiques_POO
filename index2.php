<?php
// Définition de la classe Vehicle avec ses propriétés et méthodes
class Vehicle {
    // Propriétés privées
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;

    // Constructeur
    public function __construct($marque, $modele, $kilometrage, $annee){
        // Initialisation des propriétés
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setKilometrage($kilometrage);
        $this->setAnnee($annee);
    }

    // Getters
    public function getMarque(){
        return $this->marque;
    }
    public function getModele(){
        return $this->modele;
    }
    public function getKilometrage(){
        return $this->kilometrage;
    }
    public function getAnnee(){
        return $this->annee;
    }

    // Setters
    public function setMarque($marque){
        $this->marque = $marque;
    }
    public function setModele($modele){
        $this->modele = $modele;
    }
    public function setKilometrage($kilometrage){
        $this->kilometrage = $kilometrage;
    }
    public function setAnnee($annee){
        $this->annee = $annee;
    }

    // Méthode pour démarrer
    public function demarrer(){
        echo "Démarrage du véhicule...";
    }

    // Méthode pour afficher les détails du véhicule
    public function afficher(){
        echo "La marque est $this->marque, le modèle est $this->modele, le kilométrage est de $this->kilometrage, l'année de création est $this->annee.";
    }
}

// Interface pour les véhicules réparables
interface Reparable{
    public function reparer();
}

// Définition de la classe Voiture qui hérite de Vehicle et implémente l'interface Reparable
class Voiture extends Vehicle implements Reparable {
    // Méthode pour klaxonner
    public function klaxonner(){
        var_dump("Je klaxonne ");
    }

    // Méthode de réparation
    public function reparer(){
        echo "Ceci est la fonction réparer";
    }
}

// Instanciation d'un objet Voiture
$voiture1 = new Voiture('BMW', '2145', '2154km', 2018);
// Mise à jour des propriétés de l'objet
$voiture1->setMarque('Toyota');
$voiture1->setModele('Corolla');
$voiture1->setKilometrage(1450000);
$voiture1->setAnnee(2012);
// Affichage des détails de la voiture
$voiture1->afficher();
echo '<br>';
// Appel de la méthode klaxonner
$voiture1->klaxonner();
echo '<br>';
// Appel de la méthode démarrer
$voiture1->demarrer();

// Définition de la classe Moto qui hérite de Vehicle
class Moto extends Vehicle {

}

// Instanciation d'un objet Moto
$moto1 = new Moto('Beverly', 'Beverly500', 255000, '2022');
echo '<br>';
// Affichage des détails de la moto
$moto1->afficher();
?>