<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity
 */
class Niveau
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
     * @ORM\Column(name="id_cycle", type="integer", nullable=true)
     */
    private $idCycle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;


}

