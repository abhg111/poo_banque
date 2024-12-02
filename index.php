<h1>POO Banque</h1>


<?php


spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



$michel = new Titulaire("Hawk", "Michel", "1989-01-25","Colmar", " ");

$compte1 = new Banque("Compte Courant", "1000", "€", "michel", $michel);
$compte2 = new Banque("Compte Courant", "1500", "$", "michel", $michel);


//var_dump($creditMutuel);
 
//echo $societeGeneral->afficherTitulaire();
// ($michel);

echo $michel->afficherCompte();