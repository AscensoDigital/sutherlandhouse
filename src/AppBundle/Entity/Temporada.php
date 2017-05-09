<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Temporada
 *
 * @ORM\Table(name="temporada", indexes={@ORM\Index(name="IDX_9A6BDEBD4C7F0C30", columns={"modificador_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemporadaRepository")
 */
class Temporada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="temporada_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    protected $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activa", type="boolean", nullable=false)
     */
    protected $activa = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modificador_id", referencedColumnName="id")
     * })
     */
    protected $modificador;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection()
     * @ORM\OneToMany(targetEntity="Tarifa", mappedBy="temporada", cascade={"persist"} )
     */
    protected $tarifas;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tarifas = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNombre();
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
     * @return Temporada
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
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Temporada
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean
     */
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Temporada
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set modificador
     *
     * @param Usuario $modificador
     *
     * @return Temporada
     */
    public function setModificador(Usuario $modificador = null)
    {
        $this->modificador = $modificador;

        return $this;
    }

    /**
     * Get modificador
     *
     * @return Usuario
     */
    public function getModificador()
    {
        return $this->modificador;
    }

    /**
     * Add tarifa
     *
     * @param Tarifa $tarifa
     *
     * @return Temporada
     */
    public function addTarifa(Tarifa $tarifa)
    {
        $this->tarifas[] = $tarifa;

        return $this;
    }

    /**
     * Remove tarifa
     *
     * @param Tarifa $tarifa
     */
    public function removeTarifa(Tarifa $tarifa)
    {
        $this->tarifas->removeElement($tarifa);
    }

    /**
     * Get tarifas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarifas()
    {
        return $this->tarifas;
    }
}
