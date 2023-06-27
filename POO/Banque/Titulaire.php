<?php

class Titulaire
{
    private string $_nom;
    private string $_prenom;
    private DateTime $dateNaissance;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire)
    {
        $this->$_libelle = $libelle;
        $this->$_solde = $solde;
        $this->$_devise = $devise;
        $this->$_titulaire = $titulaire;
    }

    public getLibelle()
    {
        return $this->_libelle;
    }

    public setLibelle($libelle)
    {
        $this->_libelle = =$libelle;
    }

    public getSolde()
    {
        return $this->_solde;
    }

    public setSolde($solde)
    {
        $this->_solde = =$solde;
    }

    public getDevise()
    {
        return $this->_devise;
    }

    public setDevise($devise)
    {
        $this->_devise = =$devise;
    }

    public getTitulaire()
    {
        return $this->_titulaire;
    }

    public setTitulaire($titulaire)
    {
        $this->_titulaire = =$titulaire;
    }

    public function __toString()
    {
        return $this->getLibelle() . " de " . $this->getTitulaire()->getNom() . " " . $this->getTitulaire()->getPrenom() . " - Solde : " . $this->getSolde() . " " . $this->getDevise();
    }
}