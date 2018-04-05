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
class Enseignant 
{
    /**
	* test
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
/**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;


   

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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
	

	
}

?>