<?php
require_once "exo13.php";
$voiture1 = new Voiture("peugot","408",3,"0", "1");
echo $voiture1->verifieStatut();

$voiture1 -> setVitesse(200);
?>