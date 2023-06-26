<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Adresse e-mail", "Ville");
$sexe = array("Homme", "Femme");
$intitulé = array("Développeur Logiciel","Designer web","Intégrateur", "Chef de projet");

// Affiche un champ de texte pour chaque élément contenu dans un tableau passé en paramètres
function afficherInput($noms)
{
    $result = "";

    foreach($noms as $input)
    {
        $result .= "<p>" . $input . ':<input type="text" name="' . $input . '" /></p>
    ';
    }

    return $result;
}

// Affiche un bouton radio par élément contenu dans un tableau passé en paramètre
function afficherRadio($elements)
{
    $result = '
    <fieldset>';

    foreach($elements as $key => $value)
    {
        $checked = $key == 0 ? "checked" : "";
        $result .= '
        <div>
            <input type="radio" id="' . $value . '" name="civilité" value="' . $value . '" ' .$checked . '>
            <label for= "' . $value . '">' . $value . "</label>
        </div>";
    }

    $result .= "
    </fieldset>
     ";

    return $result;
}

// Crée une liste déroulante à partir des éléments du tableau passé en paramères
function afficherListeDeroulante($elements)
{
    $result = '
    <label for="formation-select">Intitulé de formation :</label>
    <select name="formation" id="formation-select">';

    foreach($elements as $element)
    {
        $result .= '
        <option value="' . $element . '">' . "$element </option>"; 
    }

    $result .= "
    </select>
    ";

    return $result;
}

// Balise HTML form pour déclarer un formuaire
echo '<form action="" method="post">
    ';

echo afficherInput($nomsInput);
echo afficherRadio($sexe);
echo afficherListeDeroulante($intitulé);

// Bouton pour valider le formuaire et fermeture de la balise form
echo '
    <div>
        <input type="submit" value="Valider">
    </div>
</form>';