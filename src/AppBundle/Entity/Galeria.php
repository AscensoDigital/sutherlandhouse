<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05-06-17
 * Time: 2:13
 */

namespace AppBundle\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Galeria
 * @package AppBundle\Entity
 * @ORM\Table(name="galeria")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Galeria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="galeria_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="slug", type="string", length=200, nullable=false)
     */
    protected $slug;


    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="portada", type="boolean", nullable=false)
     */
    protected $portada = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", nullable=true)
     */
    protected $prioridad;

    /**
     * @Vich\UploadableField(mapping="galeria_muestra_images", fileNameProperty="url")
     * @var File
     */
    private $imageFile;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GaleriaItem", mappedBy="galeria", cascade={"persist"})
     */
    protected $galeriaItem;



    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->galeriaItem = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function countGaleriaItem() {
        return $this->getGaleriaItem()->count();
    }

    public function getStrCantidadElementos() {
        switch ($this->countGaleriaItem()) {
            case 0:
                return 'vacia';
            case 1;
                return '1 elemento';
            default:
                return $this->countGaleriaItem().' elementos';
        }
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
     * @return Galeria
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
     * Add galeriaItem
     *
     * @param \AppBundle\Entity\GaleriaItem $galeriaItem
     *
     * @return Galeria
     */
    public function addGaleriaItem(\AppBundle\Entity\GaleriaItem $galeriaItem)
    {
        $this->galeriaItem[] = $galeriaItem;

        return $this;
    }

    /**
     * Remove galeriaItem
     *
     * @param \AppBundle\Entity\GaleriaItem $galeriaItem
     */
    public function removeGaleriaItem(\AppBundle\Entity\GaleriaItem $galeriaItem)
    {
        $this->galeriaItem->removeElement($galeriaItem);
    }

    /**
     * Get galeriaItem
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGaleriaItem()
    {
        return $this->galeriaItem;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Galeria
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
     * @return Galeria
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
     * @param mixed $imageFile
     * @return Galeria
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set portada
     *
     * @param boolean $portada
     *
     * @return Galeria
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
     * Set prioridad
     *
     * @param integer $prioridad
     *
     * @return Galeria
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }
}
