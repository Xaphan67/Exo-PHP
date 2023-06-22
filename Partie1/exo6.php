<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prix_article = 9.99;
$quantité = 5;
$taux_tva = 0.2;

echo "Le montant de la facture à régler est de : " . $prix_article * $quantité * ( 1 + $taux_tva) . " €";