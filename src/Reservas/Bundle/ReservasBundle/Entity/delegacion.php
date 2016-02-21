<?php

namespace Reservas\Bundle\ReservasBundle\Entity;

/**
 * delegacion
 */
class delegacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $delegacion;


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
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return delegacion
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    public function __toString()
    {
        return $this->delegacion;
    }
}

