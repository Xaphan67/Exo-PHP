<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;

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

    // Retourne le nom et le prénom de l'auteur si l'on représente cette classe sous forme de chaîne de caractère
    public function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }
}