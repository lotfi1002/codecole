<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_massar", type="string", length=200, nullable=true)
     */
    private $idMassar;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=200, nullable=true)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=200, nullable=true)
     */
    private $tel;
     /**
     * @var string
     *
     * @ORM\Column(name="nomfr", type="string", length=200, nullable=true)
     */
    private $nomfr;


     /**
     * @var string
     *
     * @ORM\Column(name="prenomfr", type="string", length=200, nullable=true)
     */
    private $prenomfr;
     /**
     * @var date
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;
     /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=200, nullable=true)
     */
    private $sex;
     /**
     * @var string
     *
     * @ORM\Column(name="lieu1", type="string", length=200, nullable=true)
     */
    private $lieu1;
     /**
     * @var string
     *
     * @ORM\Column(name="autre1", type="string", length=200, nullable=true)
     */
    private $autre1;
     /**
     * @var string
     *
     * @ORM\Column(name="lieu2", type="string", length=200, nullable=true)
     */
    private $lieu2;
     /**
     * @var string
     *
     * @ORM\Column(name="autre2", type="string", length=200, nullable=true)
     */
    private $autre2;
     /**
     * @var string
     *
     * @ORM\Column(name="nat", type="string", length=200, nullable=true)
     */
    private $nat;
     /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=200, nullable=true)
     */
    private $cin;
     /**
     * @var string
     *

     * @ORM\Column(name="matricule", type="string", length=200, nullable=true, unique=true)

     */
    private $matricule;
     /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=200, nullable=true)
     */
    private $statut;
     /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=200, nullable=true)
     */
    private $niveau;
     /**
     * @var string
     *
     * @ORM\Column(name="niveau2", type="string", length=200, nullable=true)
     */
    private $niveau2;
     /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=200, nullable=true)
     */
    private $classe;
     /**
     * @var string
     *
     * @ORM\Column(name="red", type="string", length=200, nullable=true)
     */
    private $red;
     /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=200, nullable=true)
     */
    private $transport;
     /**
     * @var date
     *
     * @ORM\Column(name="date2", type="date", nullable=true)
     */
    private $date2;
     /**
     * @var string
     *
     * @ORM\Column(name="niveau3", type="string", length=200, nullable=true)
     */
    private $niveau3;
     /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=200, nullable=true)
     */
    private $etablissement;
     /**
     * @var string
     *
     * @ORM\Column(name="rad3", type="string", length=200, nullable=true)
     */
    private $rad3;
     /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=200, nullable=true)
     */
    private $code;
     /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=200, nullable=true)
     */
    private $ville;
     /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=true)
     */
    private $adresse;
     /**
     * @var string
     *
     * @ORM\Column(name="portable", type="string", length=200, nullable=true)
     */
    private $portable;
     /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;
     /**
     * @var date
     *
     * @ORM\Column(name="date3", type="date", nullable=true)
     */
    private $date3;
     /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=200, nullable=true)
     */
    private $motif;
     /**
     * @var string
     *
     * @ORM\Column(name="etablissement2", type="string", length=200, nullable=true)
     */
    private $etablissement2;
     /**
     * @var string
     *
     * @ORM\Column(name="rad10", type="string", length=200, nullable=true)
     */
    private $rad10;
     /**
     * @var string
     *
     * @ORM\Column(name="code2", type="string", length=200, nullable=true)
     */
    private $code2;
     /**
     * @var string
     *
     * @ORM\Column(name="ville2", type="string", length=200, nullable=true)
     */
    private $ville2;
       /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=true)
     */
    private $image;

   
    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=100, nullable=false)
     */
    private $annee;
   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idMassar
     *
     * @param string $idMassar
     *
     * @return Etudiant
     */
    public function setIdMassar($idMassar)
    {
        $this->idMassar = $idMassar;
    
        return $this;
    }

    /**
     * Get idMassar
     *
     * @return string
     */
    public function getIdMassar()
    {
        return $this->idMassar;
    }

    /**
     * Set cne
     *
     * @param string $cne
     *
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;
    
        return $this;
    }

    /**
     * Get cne
     *
     * @return string
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Etudiant
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
     * Set nomfr
     *
     * @param string $nomfr
     *
     * @return Etudiant
     */
    public function setNomfr($nomfr)
    {
        $this->nomfr = $nomfr;
    
        return $this;
    }

    /**
     * Get nomfr
     *
     * @return string
     */
    public function getNomfr()
    {
        return $this->nomfr;
    }

    /**
     * Set prenomfr
     *
     * @param string $prenomfr
     *
     * @return Etudiant
     */
    public function setPrenomfr($prenomfr)
    {
        $this->prenomfr = $prenomfr;
    
        return $this;
    }

    /**
     * Get prenomfr
     *
     * @return string
     */
    public function getPrenomfr()
    {
        return $this->prenomfr;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Etudiant
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Etudiant
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set lieu1
     *
     * @param string $lieu1
     *
     * @return Etudiant
     */
    public function setLieu1($lieu1)
    {
        $this->lieu1 = $lieu1;
    
        return $this;
    }

    /**
     * Get lieu1
     *
     * @return string
     */
    public function getLieu1()
    {
        return $this->lieu1;
    }

    /**
     * Set autre1
     *
     * @param string $autre1
     *
     * @return Etudiant
     */
    public function setAutre1($autre1)
    {
        $this->autre1 = $autre1;
    
        return $this;
    }

    /**
     * Get autre1
     *
     * @return string
     */
    public function getAutre1()
    {
        return $this->autre1;
    }

    /**
     * Set lieu2
     *
     * @param string $lieu2
     *
     * @return Etudiant
     */
    public function setLieu2($lieu2)
    {
        $this->lieu2 = $lieu2;
    
        return $this;
    }

    /**
     * Get lieu2
     *
     * @return string
     */
    public function getLieu2()
    {
        return $this->lieu2;
    }

    /**
     * Set autre2
     *
     * @param string $autre2
     *
     * @return Etudiant
     */
    public function setAutre2($autre2)
    {
        $this->autre2 = $autre2;
    
        return $this;
    }

    /**
     * Get autre2
     *
     * @return string
     */
    public function getAutre2()
    {
        return $this->autre2;
    }

    /**
     * Set nat
     *
     * @param string $nat
     *
     * @return Etudiant
     */
    public function setNat($nat)
    {
        $this->nat = $nat;
    
        return $this;
    }

    /**
     * Get nat
     *
     * @return string
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return Etudiant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Etudiant
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Etudiant
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Etudiant
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set niveau2
     *
     * @param string $niveau2
     *
     * @return Etudiant
     */
    public function setNiveau2($niveau2)
    {
        $this->niveau2 = $niveau2;
    
        return $this;
    }

    /**
     * Get niveau2
     *
     * @return string
     */
    public function getNiveau2()
    {
        return $this->niveau2;
    }

    /**
     * Set classe
     *
     * @param string $classe
     *
     * @return Etudiant
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set red
     *
     * @param string $red
     *
     * @return Etudiant
     */
    public function setRed($red)
    {
        $this->red = $red;
    
        return $this;
    }

    /**
     * Get red
     *
     * @return string
     */
    public function getRed()
    {
        return $this->red;
    }

    /**
     * Set transport
     *
     * @param string $transport
     *
     * @return Etudiant
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
    
        return $this;
    }

    /**
     * Get transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set date2
     *
     * @param \DateTime $date2
     *
     * @return Etudiant
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;
    
        return $this;
    }

    /**
     * Get date2
     *
     * @return \DateTime
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set niveau3
     *
     * @param string $niveau3
     *
     * @return Etudiant
     */
    public function setNiveau3($niveau3)
    {
        $this->niveau3 = $niveau3;
    
        return $this;
    }

    /**
     * Get niveau3
     *
     * @return string
     */
    public function getNiveau3()
    {
        return $this->niveau3;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     *
     * @return Etudiant
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;
    
        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set rad3
     *
     * @param string $rad3
     *
     * @return Etudiant
     */
    public function setRad3($rad3)
    {
        $this->rad3 = $rad3;
    
        return $this;
    }

    /**
     * Get rad3
     *
     * @return string
     */
    public function getRad3()
    {
        return $this->rad3;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Etudiant
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Etudiant
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etudiant
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
     * Set portable
     *
     * @param string $portable
     *
     * @return Etudiant
     */
    public function setPortable($portable)
    {
        $this->portable = $portable;
    
        return $this;
    }

    /**
     * Get portable
     *
     * @return string
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etudiant
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
     * Set date3
     *
     * @param \DateTime $date3
     *
     * @return Etudiant
     */
    public function setDate3($date3)
    {
        $this->date3 = $date3;
    
        return $this;
    }

    /**
     * Get date3
     *
     * @return \DateTime
     */
    public function getDate3()
    {
        return $this->date3;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return Etudiant
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;
    
        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set etablissement2
     *
     * @param string $etablissement2
     *
     * @return Etudiant
     */
    public function setEtablissement2($etablissement2)
    {
        $this->etablissement2 = $etablissement2;
    
        return $this;
    }

    /**
     * Get etablissement2
     *
     * @return string
     */
    public function getEtablissement2()
    {
        return $this->etablissement2;
    }

    /**
     * Set rad10
     *
     * @param string $rad10
     *
     * @return Etudiant
     */
    public function setRad10($rad10)
    {
        $this->rad10 = $rad10;
    
        return $this;
    }

    /**
     * Get rad10
     *
     * @return string
     */
    public function getRad10()
    {
        return $this->rad10;
    }

    /**
     * Set code2
     *
     * @param string $code2
     *
     * @return Etudiant
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;
    
        return $this;
    }

    /**
     * Get code2
     *
     * @return string
     */
    public function getCode2()
    {
        return $this->code2;
    }

    /**
     * Set ville2
     *
     * @param string $ville2
     *
     * @return Etudiant
     */
    public function setVille2($ville2)
    {
        $this->ville2 = $ville2;
    
        return $this;
    }

    /**
     * Get ville2
     *
     * @return string
     */
    public function getVille2()
    {
        return $this->ville2;
    }
       /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
     /**
     * Set image
     *
     * @param string $image
     *
     * @return Etudiant
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }



    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Etudiant
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}

