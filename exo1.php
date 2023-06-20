<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus).</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase);

echo "La phrase : « $phrase » contient $longueur caractères";