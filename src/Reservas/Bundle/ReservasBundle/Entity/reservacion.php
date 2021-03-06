<?php

namespace Reservas\Bundle\ReservasBundle\Entity;

/**
 * reservacion
 */
class reservacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $origen;

    /**
     * @var \DateTime
     */
    private $fechaReserva;

    /**
     * @var \DateTime
     */
    private $fechaIda;

    /**
     * @var integer
     */
    private $noAdultos;

    /**
     * @var integer
     */
    private $noChild;

    /**
     * @var integer
     */
    private $precio;


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
     * Set origen
     *
     * @param string $origen
     *
     * @return reservacion
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set fechaReserva
     *
     * @param \DateTime $fechaReserva
     *
     * @return reservacion
     */
    public function setFechaReserva($fechaReserva)
    {
        $this->fechaReserva = $fechaReserva;

        return $this;
    }

    /**
     * Get fechaReserva
     *
     * @return \DateTime
     */
    public function getFechaReserva()
    {
        return $this->fechaReserva;
    }

    /**
     * Set fechaIda
     *
     * @param \DateTime $fechaIda
     *
     * @return reservacion
     */
    public function setFechaIda($fechaIda)
    {
        $this->fechaIda = $fechaIda;

        return $this;
    }

    /**
     * Get fechaIda
     *
     * @return \DateTime
     */
    public function getFechaIda()
    {
        return $this->fechaIda;
    }

    /**
     * Set noAdultos
     *
     * @param integer $noAdultos
     *
     * @return reservacion
     */
    public function setNoAdultos($noAdultos)
    {
        $this->noAdultos = $noAdultos;

        return $this;
    }

    /**
     * Get noAdultos
     *
     * @return integer
     */
    public function getNoAdultos()
    {
        return $this->noAdultos;
    }

    /**
     * Set noChild
     *
     * @param integer $noChild
     *
     * @return reservacion
     */
    public function setNoChild($noChild)
    {
        $this->noChild = $noChild;

        return $this;
    }

    /**
     * Get noChild
     *
     * @return integer
     */
    public function getNoChild()
    {
        return $this->noChild;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return reservacion
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
