<?php

namespace Reservas\Bundle\ReservasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $delegacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $proveedores;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estado = new \Doctrine\Common\Collections\ArrayCollection();
        $this->delegacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proveedores = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add estado
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\estado $estado
     *
     * @return pais
     */
    public function addEstado(\Reservas\Bundle\ReservasBundle\Entity\estado $estado)
    {
        $this->estado[] = $estado;

        return $this;
    }

    /**
     * Remove estado
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\estado $estado
     */
    public function removeEstado(\Reservas\Bundle\ReservasBundle\Entity\estado $estado)
    {
        $this->estado->removeElement($estado);
    }

    /**
     * Get estado
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add delegacion
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\delegacion $delegacion
     *
     * @return pais
     */
    public function addDelegacion(\Reservas\Bundle\ReservasBundle\Entity\delegacion $delegacion)
    {
        $this->delegacion[] = $delegacion;

        return $this;
    }

    /**
     * Remove delegacion
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\delegacion $delegacion
     */
    public function removeDelegacion(\Reservas\Bundle\ReservasBundle\Entity\delegacion $delegacion)
    {
        $this->delegacion->removeElement($delegacion);
    }

    /**
     * Get delegacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Add proveedore
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\usuario $proveedore
     *
     * @return pais
     */
    public function addProveedore(\Reservas\Bundle\ReservasBundle\Entity\usuario $proveedore)
    {
        $this->proveedores[] = $proveedore;

        return $this;
    }

    /**
     * Remove proveedore
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\usuario $proveedore
     */
    public function removeProveedore(\Reservas\Bundle\ReservasBundle\Entity\usuario $proveedore)
    {
        $this->proveedores->removeElement($proveedore);
    }

    /**
     * Get proveedores
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProveedores()
    {
        return $this->proveedores;
    }
}
