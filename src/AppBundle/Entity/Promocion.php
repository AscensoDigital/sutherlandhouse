<?php

namespace AppBundle\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Promocion
 *
 * @ORM\Table(name="promocion", indexes={@ORM\Index(name="IDX_CD312F74C7F0C30", columns={"modificador_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromocionRepository")
 * @Vich\Uploadable
 */
class Promocion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="promocion_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=255, nullable=true)
     */
    protected $template;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=true)
     */
    protected $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_termino", type="datetime", nullable=true)
     */
    protected $fechaTermino;

    /**
     * @var boolean
     *
     * @ORM\Column(name="portada", type="boolean", nullable=false)
     */
    protected $portada = true;

    /**
     * @var string
     *
     * @ORM\Column(name="opcion_1_nombre", type="string", length=255, nullable=true)
     */
    protected $opcion1Nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="opcion_2_nombre", type="string", length=255, nullable=true)
     */
    protected $opcion2Nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false, unique=true)
     */
    protected $slug;

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
     */
    protected $orden;

    /**
     * @var integer
     *
     * @ORM\Column(name="cama_adicional", type="integer", nullable=true)
     */
    protected $camaAdicional;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_minimo", type="integer", nullable=true)
     */
    protected $pesoMinimo;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_maximo", type="integer", nullable=true)
     */
    protected $pesoMaximo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    protected $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="orientacion", type="boolean", nullable=true)
     */
    protected $orientacion = true; //true: vertical

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
     * @var PromocionXHabitacion[]|ArrayCollection
     *
     * @ORM\OneToMany(
     *      targetEntity="PromocionXHabitacion",
     *      mappedBy="promocion"
     * )
     * @ORM\OrderBy({"habitacion": "ASC"})
     */
    protected $promocionXHabitacions;

    /**
     * @Vich\UploadableField(mapping="promocion_images", fileNameProperty="url")
     * @var File
     */
    private $imageFile;


    public function __toString()
    {
        return $this->getNombre();
    }

    public function hasPromocionPage(){
        return !is_null($this->getTemplate());
    }

    public function hasOpcion2(){
        return !(is_null($this->getOpcion2Nombre()) || $this->getOpcion2Nombre()=="");
    }

    public function isVertical(){
        return $this->getOrientacion();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->promocionXHabitacions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Promocion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $slugify= new Slugify();
        $this->setSlug($slugify->slugify($nombre));
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Promocion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     *
     * @return Promocion
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return \DateTime
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    /**
     * Set portada
     *
     * @param boolean $portada
     *
     * @return Promocion
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return boolean
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set opcion1Nombre
     *
     * @param string $opcion1Nombre
     *
     * @return Promocion
     */
    public function setOpcion1Nombre($opcion1Nombre)
    {
        $this->opcion1Nombre = $opcion1Nombre;

        return $this;
    }

    /**
     * Get opcion1Nombre
     *
     * @return string
     */
    public function getOpcion1Nombre()
    {
        return $this->opcion1Nombre;
    }

    /**
     * Set opcion2Nombre
     *
     * @param string $opcion2Nombre
     *
     * @return Promocion
     */
    public function setOpcion2Nombre($opcion2Nombre)
    {
        $this->opcion2Nombre = $opcion2Nombre;

        return $this;
    }

    /**
     * Get opcion2Nombre
     *
     * @return string
     */
    public function getOpcion2Nombre()
    {
        return $this->opcion2Nombre;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Promocion
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
     * @return Promocion
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
     * Set template
     *
     * @param string $template
     *
     * @return Promocion
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Promocion
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Promocion
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
     * @param File $imageFile
     * @return Promocion
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
     * Add promocionXHabitacion
     *
     * @param \AppBundle\Entity\PromocionXHabitacion $promocionXHabitacion
     *
     * @return Promocion
     */
    public function addPromocionXHabitacion(\AppBundle\Entity\PromocionXHabitacion $promocionXHabitacion)
    {
        $this->promocionXHabitacions[] = $promocionXHabitacion;

        return $this;
    }

    /**
     * Remove promocionXHabitacion
     *
     * @param \AppBundle\Entity\PromocionXHabitacion $promocionXHabitacion
     */
    public function removePromocionXHabitacion(\AppBundle\Entity\PromocionXHabitacion $promocionXHabitacion)
    {
        $this->promocionXHabitacions->removeElement($promocionXHabitacion);
    }

    /**
     * Get promocionXHabitacions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromocionXHabitacions()
    {
        return $this->promocionXHabitacions;
    }

    /**
     * Set camaAdicional
     *
     * @param integer $camaAdicional
     *
     * @return Promocion
     */
    public function setCamaAdicional($camaAdicional)
    {
        $this->camaAdicional = $camaAdicional;

        return $this;
    }

    /**
     * Get camaAdicional
     *
     * @return integer
     */
    public function getCamaAdicional()
    {
        return $this->camaAdicional;
    }

    /**
     * Set pesoMinimo
     *
     * @param integer $pesoMinimo
     *
     * @return Promocion
     */
    public function setPesoMinimo($pesoMinimo)
    {
        $this->pesoMinimo = $pesoMinimo;

        return $this;
    }

    /**
     * Get pesoMinimo
     *
     * @return integer
     */
    public function getPesoMinimo()
    {
        return $this->pesoMinimo;
    }

    /**
     * Set pesoMaximo
     *
     * @param integer $pesoMaximo
     *
     * @return Promocion
     */
    public function setPesoMaximo($pesoMaximo)
    {
        $this->pesoMaximo = $pesoMaximo;

        return $this;
    }

    /**
     * Get pesoMaximo
     *
     * @return integer
     */
    public function getPesoMaximo()
    {
        return $this->pesoMaximo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Promocion
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
     * Set orden
     *
     * @param integer $orden
     *
     * @return Promocion
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

    /**
     * Set orientacion
     *
     * @param boolean $orientacion
     *
     * @return Promocion
     */
    public function setOrientacion($orientacion)
    {
        $this->orientacion = $orientacion;

        return $this;
    }

    /**
     * Get orientacion
     *
     * @return boolean
     */
    public function getOrientacion()
    {
        return $this->orientacion;
    }
}
