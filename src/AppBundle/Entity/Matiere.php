<?php
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * ecole
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Matiere 
{
    /**
	* test
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_classe;
/**
     * @ORM\Column(type="integer")
     */
    private $id_enseignant;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date;


 /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom ;


 /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $coef ;


   

public function __construct()
    {
        
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

     public function getId()
    {
        return $this->id;
    }

    public function getId_classe()
    {
        return $this->id_classe;
    }

    public function setId_classe($id_classe)
    {
        $this->id_classe = $id_classe;

        return $this;
    }
     public function getId_enseignant()
    {
        return $this->id_enseignant;
    }

    public function setId_enseignant($id_enseignant)
    {
        $this->id_enseignant = $id_enseignant;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
	

public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCoef()
    {
        return $this->coef;
    }

    public function setCoef($coef)
    {
        $this->coef = $coef;

        return $this;
    }
	
}

?>