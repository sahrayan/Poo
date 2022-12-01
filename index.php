<?php
require_once "exo13.php";
$voiture1 = new Voiture("Peugot","408",3);
$voiture2= new Voiture("citroen","c4",5);
// echo $voiture2 ->Demarrer();
// echo $voiture2 ->verifieStatut();
// echo $voiture2 ->Accelerer(50);
// echo $voiture2 ->Arret();

echo $voiture1 ->Demarrer();
echo $voiture1 ->verifieStatut();
echo $voiture1->Accelerer(50);
echo $voiture1->Accelerer(50);
echo $voiture1 ->Ralentir(20);
echo $voiture1 ->verifieVitesse();
// echo $voiture1 ->setStatut(0);
echo $voiture1 ->Arret();

// echo $voiture1 -> limite(20);
// echo $voiture1 -> verifieVitesse;
?>