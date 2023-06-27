<?php

require_once("Auteur.php");

class Livre
{
    private string $_titre;
    private int $_nbPages;
    private int $_parution;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, int $nbPages, int $parution, int $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_parution = $parution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function getNbPages()
    {
        return $this->_nbPages;
    }

    public function setNbPages($nbPages)
    {
        $this->_nbPages = $nbPages;
    }

    public function getParution()
    {
        return $this->_parution;
    }

    public function setParution($parution)
    {
        $this->_parution = $parution;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    // Retourne le titre, la date de parution, le nombre de pages et le prix du livre si l'on représente cette classe sous forme de chaîne de caractère
    public function __toString()
    {
        return $this->_titre . " (" . $this->_parution . ") : " . $this->_nbPages . " pages / " . $this->_prix . " €)";
    }
}