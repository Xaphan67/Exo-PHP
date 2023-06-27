<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private $_livres = array();

    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getLivres()
    {
        return $this->_livres;
    }

    public function setLivres($livres)
    {
        $this->_livres = $livres;
    }

    // Retourne le nom et le prénom de l'auteur si l'on représente cette classe sous forme de chaîne de caractère
    public function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }

    // Affiche la bibliographie d'un auteur donné parmi une liste de livres
    function afficherBibliographie()
    {
        $result = "";

        //Affiche Nom et prénom de l'auteur
        $result .= "<h1>Livres de " . $this->getPrenom() . " " . $this->getNom() . "</h1></br>";

        // Parcours les livres
        foreach ($this->getLivres() as $livre)
        {
            $result .= $livre . "</br>";
        }

        // Retourne le résultat suivit d'un saut de ligne
        return $result . "</br>";
    }
}