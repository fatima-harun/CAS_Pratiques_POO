<?php
require("vehicule.php");
require("interface.php");
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
?>