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
class Etudiant 
{
    /**
	* test
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CNE;

    /**
     * @ORM\Column(type="integer")
     */

    private $id_classe ;

   

public function __construct()
    {
        
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

     public function getId()
    {
        return $this->id;
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
     public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
     public function getCNE()
    {
        return $this->CNE;
    }

    public function setCNE($CNE)
    {
        $this->CNE = $CNE;

        return $this;
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
	

	
}

?>