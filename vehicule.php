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