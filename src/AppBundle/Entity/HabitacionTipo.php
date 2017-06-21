<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * HabitacionTipo
 *
 * @ORM\Table(name="habitacion_tipo")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class HabitacionTipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="habitacion_tipo_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
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
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    protected $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="cama_tipo", type="string", length=100, nullable=true)
     */
    protected $camaTipo;

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
     * @var Habitacion[]|ArrayCollection
     *
     * @ORM\OneToMany(
     *      targetEntity="Habitacion",
     *      mappedBy="habitacionTipo"
     * )
     * @ORM\OrderBy({"nombre": "ASC"})
     */
    protected $habitaciones;

    /**
     * @Vich\UploadableField(mapping="habitacion_tipo_images", fileNameProperty="url")
     * @var File
     */
    private $imageFile;


    public function __toString()
    {
        return $this->getNombre();
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habitaciones = new ArrayCollection();
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
     * @return HabitacionTipo
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return HabitacionTipo
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
     * @return HabitacionTipo
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

    /**
     * Set galeria
     *
     * @param Galeria $galeria
     *
     * @return HabitacionTipo
     */
    public function setGaleria(Galeria $galeria = null)
    {
        $this->galeria = $galeria;

        return $this;
    }

    /**
     * Get galeria
     *
     * @return Galeria
     */
    public function getGaleria()
    {
        return $this->galeria;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return HabitacionTipo
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set camaTipo
     *
     * @param string $camaTipo
     *
     * @return HabitacionTipo
     */
    public function setCamaTipo($camaTipo)
    {
        $this->camaTipo = $camaTipo;

        return $this;
    }

    /**
     * Get camaTipo
     *
     * @return string
     */
    public function getCamaTipo()
    {
        return $this->camaTipo;
    }

    /**
     * Add habitacione
     *
     * @param Habitacion $habitacione
     *
     * @return HabitacionTipo
     */
    public function addHabitacione(Habitacion $habitacione)
    {
        $this->habitaciones[] = $habitacione;

        return $this;
    }

    /**
     * Remove habitacione
     *
     * @param Habitacion $habitacione
     */
    public function removeHabitacione(Habitacion $habitacione)
    {
        $this->habitaciones->removeElement($habitacione);
    }

    /**
     * Get habitaciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHabitaciones()
    {
        return $this->habitaciones;
    }
}
