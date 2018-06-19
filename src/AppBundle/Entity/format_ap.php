<?php

namespace AppBundle\Entity;

/**
 * format_ap
 */
class format_ap
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idProf;


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
     * Set idProf
     *
     * @param integer $idProf
     *
     * @return format_ap
     */
    public function setIdProf($idProf)
    {
        $this->idProf = $idProf;

        return $this;
    }

    /**
     * Get idProf
     *
     * @return int
     */
    public function getIdProf()
    {
        return $this->idProf;
    }
}
