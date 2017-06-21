<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion", indexes={@ORM\Index(name="IDX_F45995BAB19CB347", columns={"habitacion_tipo_id"})})
 * @ORM\Entity
 * @Vich\Uploadable
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
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    protected $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="caracteristica", type="string", length=255, nullable=true)
     */
    protected $caracteristica;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var HabitacionTipo
     *
     * @ORM\ManyToOne(targetEntity="HabitacionTipo", inversedBy="habitaciones")
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

    /**
     * @Vich\UploadableField(mapping="habitacion_images", fileNameProperty="url")
     * @var File
     */
    private $imageFile;

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

    /**
     * @param File $imageFile
     * @return Habitacion
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Habitacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Habitacion
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
