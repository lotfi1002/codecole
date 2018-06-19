<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity
 */
class Enseignant
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
     * @ORM\Column(name="mom", type="string", length=200, nullable=true)
     */
    private $mom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=200, nullable=true)
     */
    private $tel;



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
     * Set mom
     *
     * @param string $mom
     *
     * @return Enseignant
     */
    public function setMom($mom)
    {
        $this->mom = $mom;
    
        return $this;
    }

    /**
     * Get mom
     *
     * @return string
     */
    public function getMom()
    {
        return $this->mom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enseignant
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
     * Set email
     *
     * @param string $email
     *
     * @return Enseignant
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
     * Set tel
     *
     * @param string $tel
     *
     * @return Enseignant
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
}
