<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromocionXHabitacion
 *
 * @ORM\Table(name="promocion_x_habitacion", indexes={@ORM\Index(name="IDX_F412C57EB1E453D4", columns={"promocion_id"}), @ORM\Index(name="IDX_F412C57EB009290D", columns={"habitacion_id"})})
 * @ORM\Entity
 */
class PromocionXHabitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="promocion_x_habitacion_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vendida", type="boolean", nullable=false)
     */
    protected $vendida = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_opcion_1", type="integer", nullable=true)
     */
    protected $pesoOpcion1;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_opcion_2", type="integer", nullable=true)
     */
    protected $pesoOpcion2;

    /**
     * @var integer
     *
     * @ORM\Column(name="dolar_opcion_1", type="integer", nullable=true)
     */
    protected $dolarOpcion1;

    /**
     * @var integer
     *
     * @ORM\Column(name="dolar_opcion_2", type="integer", nullable=true)
     */
    protected $dolarOpcion2;

    /**
     * @var Promocion
     *
     * @ORM\ManyToOne(targetEntity="Promocion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promocion_id", referencedColumnName="id")
     * })
     */
    protected $promocion;

    /**
     * @var Habitacion
     *
     * @ORM\ManyToOne(targetEntity="Habitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="habitacion_id", referencedColumnName="id")
     * })
     */
    protected $habitacion;



    public function __toString()
    {
        return $this->getPromocion().' - '.$this->getHabitacion();
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
     * Set vendida
     *
     * @param boolean $vendida
     *
     * @return PromocionXHabitacion
     */
    public function setVendida($vendida)
    {
        $this->vendida = $vendida;

        return $this;
    }

    /**
     * Get vendida
     *
     * @return boolean
     */
    public function getVendida()
    {
        return $this->vendida;
    }

    /**
     * Set pesoOpcion1
     *
     * @param integer $pesoOpcion1
     *
     * @return PromocionXHabitacion
     */
    public function setPesoOpcion1($pesoOpcion1)
    {
        $this->pesoOpcion1 = $pesoOpcion1;

        return $this;
    }

    /**
     * Get pesoOpcion1
     *
     * @return integer
     */
    public function getPesoOpcion1()
    {
        return $this->pesoOpcion1;
    }

    /**
     * Set pesoOpcion2
     *
     * @param integer $pesoOpcion2
     *
     * @return PromocionXHabitacion
     */
    public function setPesoOpcion2($pesoOpcion2)
    {
        $this->pesoOpcion2 = $pesoOpcion2;

        return $this;
    }

    /**
     * Get pesoOpcion2
     *
     * @return integer
     */
    public function getPesoOpcion2()
    {
        return $this->pesoOpcion2;
    }

    /**
     * Set dolarOpcion1
     *
     * @param integer $dolarOpcion1
     *
     * @return PromocionXHabitacion
     */
    public function setDolarOpcion1($dolarOpcion1)
    {
        $this->dolarOpcion1 = $dolarOpcion1;

        return $this;
    }

    /**
     * Get dolarOpcion1
     *
     * @return integer
     */
    public function getDolarOpcion1()
    {
        return $this->dolarOpcion1;
    }

    /**
     * Set dolarOpcion2
     *
     * @param integer $dolarOpcion2
     *
     * @return PromocionXHabitacion
     */
    public function setDolarOpcion2($dolarOpcion2)
    {
        $this->dolarOpcion2 = $dolarOpcion2;

        return $this;
    }

    /**
     * Get dolarOpcion2
     *
     * @return integer
     */
    public function getDolarOpcion2()
    {
        return $this->dolarOpcion2;
    }

    /**
     * Set promocion
     *
     * @param Promocion $promocion
     *
     * @return PromocionXHabitacion
     */
    public function setPromocion(Promocion $promocion = null)
    {
        $this->promocion = $promocion;

        return $this;
    }

    /**
     * Get promocion
     *
     * @return Promocion
     */
    public function getPromocion()
    {
        return $this->promocion;
    }

    /**
     * Set habitacion
     *
     * @param Habitacion $habitacion
     *
     * @return PromocionXHabitacion
     */
    public function setHabitacion(Habitacion $habitacion = null)
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    /**
     * Get habitacion
     *
     * @return Habitacion
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }
}
