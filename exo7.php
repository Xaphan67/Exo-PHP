<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :</br>
Poussin : entre 6 et 7 ans</br>
Pupille : entre 8 et 9 ans</br>
Minime : entre 10 et 11 ans</br>
Cadet : à partir de 12 ans</br>
Si la catégorie n'est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

$age = 10;
$catégorie = "";

//Vérifie l'âge et assigne une catégorie
if ($age >= 12)
{
    $catégorie = "Cadet";
}
else if ($age >= 10)
{
    $catégorie = "Minime";
}
else if ($age >= 8)
{
    $catégorie = "Pupille";
}
else if ($age >= 6)
{
    $catégorie = "Poussin";
}

// Solution avec switch-case (remplace normalement le if précédent)
switch(true){ //Compare un booléen
    case $age >=12 : 
        $catégorie = "Cadet";
    case $age >= 10 :
        $catégorie = "Minime";
    case $age >= 8 :
        $catégorie = "Pupille";
    case $age >= 6 :
        $catégorie = "Poussin";
 }

// Affiche la catégorie en fonction de l'âge
if ($catégorie != "")
{
    echo "L'enfant qui a  $age  ans appartient à la catégorie «  $catégorie  »";
}
else
{
    echo "L'enfant ne fait parti d'aucune catégorie";
}

