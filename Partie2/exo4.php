<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/</br>
Le tableau passé en argument sera le suivant: $capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Résultat</h2>

<?php

$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

// Affiche le tableau passé en paramètre en un tableau HTML
function afficherTableHTML($capitales)
{
    // Trie le tableau par ordre alphabétique des valeurs (ici les capitales)
    ksort($capitales);

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
        $result .=  "
        <tr>
            <td>" . strtoupper($key) . "</td>
            <td> $value </td>
            <td>" . '<a href="https://fr.wikipedia.org/wiki/' . $value . '" target="_blank">Wikipedia</a></td>
        </tr>';
    }

    // Fin du code HTML du tableau
    $result .= "
            </tbody>
        </table>
    ";

    return $result;
}

echo afficherTableHTML($capitales);