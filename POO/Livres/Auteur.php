<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private $_livres = array(); // Vide quand la classe est instanciée - Quand un livre est instancié, il s'ajoute automatiquement si son auteur correspond (appel function ajouterLivre($livre) dans le constructueur de la classe Auteur)

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

    // Retourne le prénom et le nom de l'auteur si l'on représente cette classe sous forme de chaîne de caractère
    public function __toString()
    {
        return $this->_prenom . " " . $this->_nom;
    }

    // Ajoute un livre à la liste des livres de l'auteur
    public function ajouterLivre($livre)
    {
        array_push($this->_livres, $livre); // Ajoute le livre actuel à la suite des livres de l'auteur -- Autre possibilité : $this->_livres[] = $livre;
    }

    // Affiche la bibliographie d'un auteur donné parmi une liste de livres
    public function afficherBibliographie()
    {
        $result = "";

        //Affiche Nom et prénom de l'auteur
        $result .= "<h1>Livres de $this </h1>";

        // Parcours les livres
        foreach ($this->getLivres() as $livre)
        {
            $result .= $livre . "</br>";
        }

        // Retourne le résultat suivit d'un saut de ligne
        return $result . "</br>";
    }
}