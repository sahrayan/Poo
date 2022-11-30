<?php
require_once "exo13.php";
$voiture1 = new Voiture("peugot","408",3,"0", "0");
echo $voiture1->verifieStatut();
$voiture1 ->Demarrer();
// $voiture1 -> SetVitesse(200);
?>