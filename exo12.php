<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>

<h2>Résultat</h2>

<?php

$users = [
    "Michael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

// Trie le tableau par prébom (clé du tableau)
ksort($users);

//Return a different word based of $lang
function translateHello($lang)
{
    $hello = "Hello";

    if ($lang == "FRA")
    {
        $hello = "Salut";
    }
    else if ($lang == "ESP")
    {
        $hello = "Hola";
    }

    return "$hello";
}

foreach ($users as $key => $value)
{
    echo translateHello($value) . " $key </br>";
}
