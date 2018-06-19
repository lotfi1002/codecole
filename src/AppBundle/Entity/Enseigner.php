<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseigner
 *
 * @ORM\Table(name="enseigner")
 * @ORM\Entity
 */
class Enseigner
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
     * @ORM\Column(name="id_classe", type="integer", nullable=false)
     */
    private $idClasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_enseignant", type="integer", nullable=false)
     */
    private $idEnseignant;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;


}

