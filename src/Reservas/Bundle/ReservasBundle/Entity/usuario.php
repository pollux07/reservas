<?php

namespace Reservas\Bundle\ReservasBundle\Entity;

/**
 * usuario
 */
class usuario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apPat;

    /**
     * @var string
     */
    private $apMat;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var string
     */
    private $noExt;

    /**
     * @var string
     */
    private $noInt;

    /**
     * @var string
     */
    private $colonia;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apPat
     *
     * @param string $apPat
     *
     * @return usuario
     */
    public function setApPat($apPat)
    {
        $this->apPat = $apPat;

        return $this;
    }

    /**
     * Get apPat
     *
     * @return string
     */
    public function getApPat()
    {
        return $this->apPat;
    }

    /**
     * Set apMat
     *
     * @param string $apMat
     *
     * @return usuario
     */
    public function setApMat($apMat)
    {
        $this->apMat = $apMat;

        return $this;
    }

    /**
     * Get apMat
     *
     * @return string
     */
    public function getApMat()
    {
        return $this->apMat;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return usuario
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set noExt
     *
     * @param string $noExt
     *
     * @return usuario
     */
    public function setNoExt($noExt)
    {
        $this->noExt = $noExt;

        return $this;
    }

    /**
     * Get noExt
     *
     * @return string
     */
    public function getNoExt()
    {
        return $this->noExt;
    }

    /**
     * Set noInt
     *
     * @param string $noInt
     *
     * @return usuario
     */
    public function setNoInt($noInt)
    {
        $this->noInt = $noInt;

        return $this;
    }

    /**
     * Get noInt
     *
     * @return string
     */
    public function getNoInt()
    {
        return $this->noInt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return usuario
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }
    /**
     * @var \Reservas\Bundle\ReservasBundle\Entity\pais
     */
    private $pais;

    /**
     * @var \Reservas\Bundle\ReservasBundle\Entity\estado
     */
    private $estado;

    /**
     * @var \Reservas\Bundle\ReservasBundle\Entity\delegacion
     */
    private $delegacion;


    /**
     * Set pais
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\pais $pais
     *
     * @return usuario
     */
    public function setPais(\Reservas\Bundle\ReservasBundle\Entity\pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \Reservas\Bundle\ReservasBundle\Entity\pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set estado
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\estado $estado
     *
     * @return usuario
     */
    public function setEstado(\Reservas\Bundle\ReservasBundle\Entity\estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \Reservas\Bundle\ReservasBundle\Entity\estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set delegacion
     *
     * @param \Reservas\Bundle\ReservasBundle\Entity\delegacion $delegacion
     *
     * @return usuario
     */
    public function setDelegacion(\Reservas\Bundle\ReservasBundle\Entity\delegacion $delegacion = null)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return \Reservas\Bundle\ReservasBundle\Entity\delegacion
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }
}
