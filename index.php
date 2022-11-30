<?php
require_once "exo13.php";
$voiture1 = new Voiture("peugot","408",3,"0", "1");
echo $voiture1->verifieStatut();
echo $voiture1 ->Demarrer();

echo $voiture1 -> SetVitesse(20);
// echo $voiture1 -> verifieVitesse;
?>