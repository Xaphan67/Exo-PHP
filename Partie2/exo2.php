<h1>Exercice 2</h1>

<p>Soit le tableau suivant:</br>
$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");</br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</br>
Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

// Affiche le tableau passé en paramètre en un tableau HTML
function afficherTableHTML($capitales)
{
    // Trie le tableau par ordre alphabétique des clés du tableau (ici le payis)
    asort($capitales);

    // Header du tableau
    $result = '
        <table>
            <thead>
                <tr>
                    <th colspan="2">Capitales</th>
                </tr>
            </thead>
        <tbody>
    '; 

    // Parcours le tableau passé en index et génère une ligne par index
    foreach ($capitales as $key => $value)
    {
        $result .=  "<tr><td> " . strtoupper($key) . "</td><td> $value </td></tr>";
    }

    // Fin du code HTML du tableau
    $result .= "
            </tbody>
        </table>
    ";

    return $result;
}

echo afficherTableHTML($capitales);

// Autre possibilité :

function afficherTableHTMLOtherVers($capitales)
{
    asort($capitales);

    ?> <!-- Ferme la balise PHP -->

    <table>
            <thead>
                <tr>
                    <th colspan="2">Capitales</th>
                </tr>
            </thead>
        <tbody>
    
    <?php
    foreach ($capitales as $key => $value)
    {
        ?>
        <tr>
            <td> <?= strtoupper($key) ?> </td>
            <td> <?= $value ?> </td>
        </tr>
        <?php
    }
    
    echo "</tbody></table>test";
}