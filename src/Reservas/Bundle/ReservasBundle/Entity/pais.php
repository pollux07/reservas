<?php

namespace Reservas\Bundle\ReservasBundle\Entity;

/**
 * pais
 */
class pais
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pais;


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
     * Set pais
     *
     * @param string $pais
     *
     * @return pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    public function __toString()
    {
        return $this->pais;
    }
}

