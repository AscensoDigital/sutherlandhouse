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
     * @var HabitacionTipo
     *
     * @ORM\ManyToOne(targetEntity="HabitacionTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="habitacion_tipo_id", referencedColumnName="id")
     * })
     */
    protected $habitacionTipo;



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
     * @param \AppBundle\Entity\HabitacionTipo $habitacionTipo
     *
     * @return Habitacion
     */
    public function setHabitacionTipo(\AppBundle\Entity\HabitacionTipo $habitacionTipo = null)
    {
        $this->habitacionTipo = $habitacionTipo;

        return $this;
    }

    /**
     * Get habitacionTipo
     *
     * @return \AppBundle\Entity\HabitacionTipo
     */
    public function getHabitacionTipo()
    {
        return $this->habitacionTipo;
    }
}
