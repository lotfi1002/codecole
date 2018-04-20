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
class Cycle 
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
     * @ORM\Column(type="integer")
     */

    private $id_ecole ;

   

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

     public function getId_ecole()
    {
        return $this->id_ecole;
    }

    public function setId_ecole($id_ecole)
    {
        $this->id_ecole = $id_ecole;

        return $this;
    }
	

	
}

?>