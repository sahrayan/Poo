<?php
require_once "Livre.php";
require_once "Auteur.php";

$auteur1 =new Auteur('Stephen ','King');


$livre1 =new Livre('Ca',1986,1138,20, $auteur1);


$livre2 =new livre('Simetierre',1983,374,15, $auteur1);


$livre3 =new livre('Le Fléau',1978,823,14, $auteur1);


$livre4 =new livre('Shining',1977,447,16, $auteur1);


$auteur1->afficherBibliographie();






?>