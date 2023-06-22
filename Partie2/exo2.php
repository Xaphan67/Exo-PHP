<h1>Exercice 2</h1>

<p>Soit le tableau suivant:</br>
$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");</br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</br>
Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

function afficherTableHTML($capitales)
{
    asort($capitales);

    $result = '
        <table>
            <thead>
                <tr>
                    <th colspan="2">Capitales</th>
                </tr>
            </thead>
        <tbody>
    '; 

    foreach ($capitales as $key => $value)
    {
        $result .=  "<tr><td> " . strtoupper($key) . "</td><td> $value </td></tr>";
    }

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