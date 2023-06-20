<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui > par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$old_word = "aujourd'hui";
$new_word = "demain";
$new_phrase = str_replace($old_word, $new_word, $phrase);

echo "Ancienne phrase : « $phrase ».</br>Nouvelle phrase : « $new_phrase ».";