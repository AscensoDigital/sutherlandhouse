<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifa
 *
 * @ORM\Table(name="tarifa", uniqueConstraints={@ORM\UniqueConstraint(name="tarifa_temporada_id_habitacion_tipo_id_key", columns={"temporada_id", "habitacion_tipo_id"})}, indexes={@ORM\Index(name="IDX_A01B5DE6E1CF8A8", columns={"temporada_id"}), @ORM\Index(name="IDX_A01B5DEB19CB347", columns={"habitacion_tipo_id"}), @ORM\Index(name="IDX_A01B5DE4C7F0C30", columns={"modificador_id"})})
 * @ORM\Entity
 */
class Tarifa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="tarifa_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_semana", type="integer", nullable=true)
     */
    protected $pesoSemana;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_finde", type="integer", nullable=true)
     */
    protected $pesoFinde;

    /**
     * @var integer
     *
     * @ORM\Column(name="dolar_semana", type="integer", nullable=true)
     */
    protected $dolarSemana;

    /**
     * @var integer
     *
     * @ORM\Column(name="dolar_finde", type="integer", nullable=true)
     */
    protected $dolarFinde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var Temporada
     *
     * @ORM\ManyToOne(targetEntity="Temporada", inversedBy="tarifas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="temporada_id", referencedColumnName="id")
     * })
     */
    protected $temporada;

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
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modificador_id", referencedColumnName="id")
     * })
     */
    protected $modificador;


    public function __toString()
    {
        return $this->getTemporada().' - '.$this->getHabitacionTipo();
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
     * Set pesoSemana
     *
     * @param integer $pesoSemana
     *
     * @return Tarifa
     */
    public function setPesoSemana($pesoSemana)
    {
        $this->pesoSemana = $pesoSemana;

        return $this;
    }

    /**
     * Get pesoSemana
     *
     * @return integer
     */
    public function getPesoSemana()
    {
        return $this->pesoSemana;
    }

    /**
     * Set pesoFinde
     *
     * @param integer $pesoFinde
     *
     * @return Tarifa
     */
    public function setPesoFinde($pesoFinde)
    {
        $this->pesoFinde = $pesoFinde;

        return $this;
    }

    /**
     * Get pesoFinde
     *
     * @return integer
     */
    public function getPesoFinde()
    {
        return $this->pesoFinde;
    }

    /**
     * Set dolarSemana
     *
     * @param integer $dolarSemana
     *
     * @return Tarifa
     */
    public function setDolarSemana($dolarSemana)
    {
        $this->dolarSemana = $dolarSemana;

        return $this;
    }

    /**
     * Get dolarSemana
     *
     * @return integer
     */
    public function getDolarSemana()
    {
        return $this->dolarSemana;
    }

    /**
     * Set dolarFinde
     *
     * @param integer $dolarFinde
     *
     * @return Tarifa
     */
    public function setDolarFinde($dolarFinde)
    {
        $this->dolarFinde = $dolarFinde;

        return $this;
    }

    /**
     * Get dolarFinde
     *
     * @return integer
     */
    public function getDolarFinde()
    {
        return $this->dolarFinde;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Tarifa
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
     * Set temporada
     *
     * @param Temporada $temporada
     *
     * @return Tarifa
     */
    public function setTemporada(Temporada $temporada = null)
    {
        $this->temporada = $temporada;

        return $this;
    }

    /**
     * Get temporada
     *
     * @return Temporada
     */
    public function getTemporada()
    {
        return $this->temporada;
    }

    /**
     * Set habitacionTipo
     *
     * @param HabitacionTipo $habitacionTipo
     *
     * @return Tarifa
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
     * Set modificador
     *
     * @param Usuario $modificador
     *
     * @return Tarifa
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
}
