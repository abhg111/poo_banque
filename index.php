<h1>POO Banque</h1>


<?php


spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



$michel = new Titulaire("Hawk", "Michel", "1989-01-25","Colmar");

$compte1 = new Banque("Compte Courant 1", "1000", "€", "", $michel);
$compte2 = new Banque("Compte Courant 2", "1500", "$", "", $michel);


//var_dump($creditMutuel);
 
//echo $societeGeneral->afficherTitulaire();
// ($michel);

// echo $michel->afficherCompte();
// var_dump($compte2);
// $compte1->debiter(100);
var_dump($compte1);

// $compte2->crediter(200, $compte2);
var_dump($compte2);
echo $compte1->virement(300, $compte2);
// echo $compte2->getSoldeInt();
var_dump($compte1);

// $compte2->crediter(200, $compte2);
var_dump($compte2);