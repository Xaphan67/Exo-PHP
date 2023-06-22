<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<h2>Résultat</h2>

<?php

$montant_payer = 152;
$montant_versé = 200;
$reste = $montant_versé - $montant_payer;

echo "Montant à payer : $montant_payer €</br>";
echo "Montant versé : $montant_versé €</br>";
echo "Reste à payer : $reste €</br>";
echo "***************************************************</br>";
echo "Rendue de monnaie :</br>";

// Pour les billets de 10€
// Divise le reste à payer par 10 et récupère l'entier correspodant
$billets10 = intval($reste / 10);

// Soustrait la valeur obtenue au reste a payer
$reste = $reste - 10 * $billets10;

// Répète la procédure pour les billets de 5€ et les pièces de 2€
$billets5 = intval($reste / 5);
$reste = $reste - 5 * $billets5;
$pieces2 = intval($reste / 2);
$reste = $reste - 2 * $pieces2;

// $reste contient alors la valeur pour les pièces de 1€
echo "$billets10 billets de 10 € - $billets5 billet de 5 € - $pieces2 pièce de 2 € - $reste pièce de 1 €";