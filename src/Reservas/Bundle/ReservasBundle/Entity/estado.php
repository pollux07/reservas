<?php

namespace Reservas\Bundle\ReservasBundle\Entity;

/**
 * estado
 */
class estado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $estado;


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
     * Set estado
     *
     * @param string $estado
     *
     * @return estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    public function __toString()
    {
        return $this->estado;
    }
}

