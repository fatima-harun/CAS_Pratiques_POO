<?php
require("vehicule.php");
class Moto extends Vehicle {

}

// Instanciation d'un objet Moto
$moto1 = new Moto('Beverly', 'Beverly500', 255000, '2022');
echo '<br>';
// Affichage des détails de la moto
$moto1->afficher();