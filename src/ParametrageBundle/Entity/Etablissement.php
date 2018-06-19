<?php

namespace ParametrageBundle\Entity;

/**
 * Etablissement
 */
class Etablissement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $nomAr;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $adresseAr;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $villeAr;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $academie;

    /**
     * @var string
     */
    private $academieAr;

    /**
     * @var string
     */
    private $numAutorisation;

    /**
     * @var string
     */
    private $identifiant;

    /**
     * @var string
     */
    private $logoEcole;

    /**
     * @var string
     */
    private $logoAcademie;

    /**
     * @var string
     */
    private $nomDir;

    /**
     * @var string
     */
    private $nomDirAr;

    /**
     * @var string
     */
    private $prenomDir;

    /**
     * @var string
     */
    private $prenomDirAr;

    /**
     * @var string
     */
    private $fichierSignature;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etablissement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomAr
     *
     * @param string $nomAr
     *
     * @return Etablissement
     */
    public function setNomAr($nomAr)
    {
        $this->nomAr = $nomAr;

        return $this;
    }

    /**
     * Get nomAr
     *
     * @return string
     */
    public function getNomAr()
    {
        return $this->nomAr;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etablissement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adresseAr
     *
     * @param string $adresseAr
     *
     * @return Etablissement
     */
    public function setAdresseAr($adresseAr)
    {
        $this->adresseAr = $adresseAr;

        return $this;
    }

    /**
     * Get adresseAr
     *
     * @return string
     */
    public function getAdresseAr()
    {
        return $this->adresseAr;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Etablissement
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set villeAr
     *
     * @param string $villeAr
     *
     * @return Etablissement
     */
    public function setVilleAr($villeAr)
    {
        $this->villeAr = $villeAr;

        return $this;
    }

    /**
     * Get villeAr
     *
     * @return string
     */
    public function getVilleAr()
    {
        return $this->villeAr;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Etablissement
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Etablissement
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Etablissement
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etablissement
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set academie
     *
     * @param string $academie
     *
     * @return Etablissement
     */
    public function setAcademie($academie)
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * Get academie
     *
     * @return string
     */
    public function getAcademie()
    {
        return $this->academie;
    }

    /**
     * Set academieAr
     *
     * @param string $academieAr
     *
     * @return Etablissement
     */
    public function setAcademieAr($academieAr)
    {
        $this->academieAr = $academieAr;

        return $this;
    }

    /**
     * Get academieAr
     *
     * @return string
     */
    public function getAcademieAr()
    {
        return $this->academieAr;
    }

    /**
     * Set numAutorisation
     *
     * @param string $numAutorisation
     *
     * @return Etablissement
     */
    public function setNumAutorisation($numAutorisation)
    {
        $this->numAutorisation = $numAutorisation;

        return $this;
    }

    /**
     * Get numAutorisation
     *
     * @return string
     */
    public function getNumAutorisation()
    {
        return $this->numAutorisation;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Etablissement
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set logoEcole
     *
     * @param string $logoEcole
     *
     * @return Etablissement
     */
    public function setLogoEcole($logoEcole)
    {
        $this->logoEcole = $logoEcole;

        return $this;
    }

    /**
     * Get logoEcole
     *
     * @return string
     */
    public function getLogoEcole()
    {
        return $this->logoEcole;
    }

    /**
     * Set logoAcademie
     *
     * @param string $logoAcademie
     *
     * @return Etablissement
     */
    public function setLogoAcademie($logoAcademie)
    {
        $this->logoAcademie = $logoAcademie;

        return $this;
    }

    /**
     * Get logoAcademie
     *
     * @return string
     */
    public function getLogoAcademie()
    {
        return $this->logoAcademie;
    }

    /**
     * Set nomDir
     *
     * @param string $nomDir
     *
     * @return Etablissement
     */
    public function setNomDir($nomDir)
    {
        $this->nomDir = $nomDir;

        return $this;
    }

    /**
     * Get nomDir
     *
     * @return string
     */
    public function getNomDir()
    {
        return $this->nomDir;
    }

    /**
     * Set nomDirAr
     *
     * @param string $nomDirAr
     *
     * @return Etablissement
     */
    public function setNomDirAr($nomDirAr)
    {
        $this->nomDirAr = $nomDirAr;

        return $this;
    }

    /**
     * Get nomDirAr
     *
     * @return string
     */
    public function getNomDirAr()
    {
        return $this->nomDirAr;
    }

    /**
     * Set prenomDir
     *
     * @param string $prenomDir
     *
     * @return Etablissement
     */
    public function setPrenomDir($prenomDir)
    {
        $this->prenomDir = $prenomDir;

        return $this;
    }

    /**
     * Get prenomDir
     *
     * @return string
     */
    public function getPrenomDir()
    {
        return $this->prenomDir;
    }

    /**
     * Set prenomDirAr
     *
     * @param string $prenomDirAr
     *
     * @return Etablissement
     */
    public function setPrenomDirAr($prenomDirAr)
    {
        $this->prenomDirAr = $prenomDirAr;

        return $this;
    }

    /**
     * Get prenomDirAr
     *
     * @return string
     */
    public function getPrenomDirAr()
    {
        return $this->prenomDirAr;
    }

    /**
     * Set fichierSignature
     *
     * @param string $fichierSignature
     *
     * @return Etablissement
     */
    public function setFichierSignature($fichierSignature)
    {
        $this->fichierSignature = $fichierSignature;

        return $this;
    }

    /**
     * Get fichierSignature
     *
     * @return string
     */
    public function getFichierSignature()
    {
        return $this->fichierSignature;
    }
}

