<?php

class Titulaire
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private $_comptes = array();

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_ville = $ville;
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

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    public function __toString()
    {
        return $this->getNom() . "  " . $this->getprenom();
    }

    // Ajoute un compte au titluaire
    public function ajouterCompte($compte)
    {
        array_push($this->_comptes, $compte);
    }

    // Affiche les informations du titulaire
    public function afficherInformations()
    {
        $now = new DateTime(); // Date actuelle
        $age = $now->diff($this->_dateNaissance); // Différence entre maintenant et la date de naissance du titulaire
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE); // Formate la date en français

        // Affiche les informations de base du titulaire
        $result = "<h1>" . $this . "</h1>
        Né le " . $formatter->format($this->_dateNaissance) . " (" . $age->y . " ans)</br>
        Comptes :</br>";

        // Affiche les informations de chacun de ses comptes
        foreach ($this->_comptes as $compte)
        {
            $result .= "$compte </br>";
        }

        return $result;
    }
}