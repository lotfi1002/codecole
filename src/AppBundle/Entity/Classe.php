<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity
 */
class Classe
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
     * @var integer
     *
     * @ORM\Column(name="id_niveau", type="integer", nullable=true)
     */
    private $idNiveau;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;
<<<<<<< HEAD


<<<<<<< HEAD
}

=======
=======


>>>>>>> d835e4bf48e234f6d1edba8bb55ae50324c50620

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
     * Set idNiveau
     *
     * @param integer $idNiveau
     *
     * @return Classe
     */
    public function setIdNiveau($idNiveau)
    {
        $this->idNiveau = $idNiveau;
    
        return $this;
    }

    /**
     * Get idNiveau
     *
     * @return integer
     */
    public function getIdNiveau()
    {
        return $this->idNiveau;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Classe
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
}
<<<<<<< HEAD
>>>>>>> 33e83534a769e9c71dd87b68c5cfaf3c0e95f088
=======
>>>>>>> d835e4bf48e234f6d1edba8bb55ae50324c50620
