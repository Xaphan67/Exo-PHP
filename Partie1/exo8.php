<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la 
forme </br>
Table de 8 :</br>
1 x 8 = 8</br>
2 x 8 = 16</br>
3 x 8 = 24...</br>
Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php

$nombre = 8;

echo "Table de " . $nombre . " :</br>";

// Solution avec boucle for
for ($i = 1; $i <= 10; $i++)
{
    echo "$i x  $nombre  =  " . $i*$nombre . "</br>";
}

// Séparation
echo "<hr>";

// Solution avec boucle while
$i = 1;
while ($i <= 10)
{
    echo "$i x $nombre = " . $i*$nombre . "</br>";
    $i++;
}