<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</br>
$p1 = new Personne("DUPONT","Michel", "1980-02-19");</br>
$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");</p>

<h2>Résultat</h2>

<?php

Class Personne
{
    private string $_name;
    private string $_first_name;
    private DateTime $_birthdate;

    //Constructeur appelé lors de l'instanciation de la classe
    function __construct($name, $first_name, string $birthdate)
    {
        $this->_name = $name;
        $this->_first_name = $first_name;
        $this->_birthdate = new DateTime($birthdate);
    }

    // Getters et Setters
    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getFirstName()
    {
        return $this->_first_name;
    }

    public function setFirstName($firstname)
    {
        $this->_first_name = $firstname;
    }

    public function getBirthdate()
    {
        return $this->_birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }

    // Calcule l'âge de la personne
    public function calcAge()
    {
        $now = new DateTime();
        $age = $now->diff($this->_birthdate)->y;
        return $age;
    }

    // Détermine comment l'objet doit réagir lorsqu'il est traité comme une chaîne de caractères. Par exemple, ce que echo $p1; affichera
    public function __toString()
    {
        return $this->_name . " " . $this->_first_name . " à " . $this->calcAge(). " ans";
    }
}

$p1 = new Personne("DUPONT","Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");

echo "$p1 </br> $p2";