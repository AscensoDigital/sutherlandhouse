<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion", indexes={@ORM\Index(name="IDX_F45995BAB19CB347", columns={"habitacion_tipo_id"})})
 * @ORM\Entity
 */
class Habitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="habitacion_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="caracteristica", type="string", length=255, nullable=true)
     */
    protected $caracteristica;

    /**
     * @var HabitacionTipo
     *
     * @ORM\ManyToOne(targetEntity="HabitacionTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="habitacion_tipo_id", referencedColumnName="id")
     * })
     */
    protected $habitacionTipo;

    /**
     * @var Galeria
     *
     * @ORM\ManyToOne(targetEntity="Galeria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="galeria_id", referencedColumnName="id")
     * })
     */
    protected $galeria;


    public function __toString()
    {
        return $this->getHabitacionTipo().' '.$this->getNombre();
    }

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
     * @return Habitacion
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
     * Set habitacionTipo
     *
     * @param HabitacionTipo $habitacionTipo
     *
     * @return Habitacion
     */
    public function setHabitacionTipo(HabitacionTipo $habitacionTipo = null)
    {
        $this->habitacionTipo = $habitacionTipo;

        return $this;
    }

    /**
     * Get habitacionTipo
     *
     * @return HabitacionTipo
     */
    public function getHabitacionTipo()
    {
        return $this->habitacionTipo;
    }

    /**
     * Set galeria
     *
     * @param \AppBundle\Entity\Galeria $galeria
     *
     * @return Habitacion
     */
    public function setGaleria(\AppBundle\Entity\Galeria $galeria = null)
    {
        $this->galeria = $galeria;

        return $this;
    }

    /**
     * Get galeria
     *
     * @return \AppBundle\Entity\Galeria
     */
    public function getGaleria()
    {
        return $this->galeria;
    }

    /**
     * Set caracteristica
     *
     * @param string $caracteristica
     *
     * @return Habitacion
     */
    public function setCaracteristica($caracteristica)
    {
        $this->caracteristica = $caracteristica;

        return $this;
    }

    /**
     * Get caracteristica
     *
     * @return string
     */
    public function getCaracteristica()
    {
        return $this->caracteristica;
    }
}
