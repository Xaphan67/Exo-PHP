<?php

require_once("Compte.php");
require_once("Titulaire.php");

$titulaire1 = new Titulaire("Lefevre", "Jaques", "1985-01-17", "Obernai");
$titulaire2 = new Titulaire("Dujardin", "Benoît", "2001-06-22", "Reims");

echo $titulaire1->afficherInformations();