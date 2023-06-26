<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

// Affiche une image un nombre spécifié de fois en paramètre 
function repeterImage(string $url, int $qty)
{
    $result = "";

    // img src -> Source (url) de l'image
    for ($i = 1; $i <= $qty; $i++)
    {
        $result .= '<img src="' .$url . '">';
    }

    return $result;
}

echo repeterImage($url,4);