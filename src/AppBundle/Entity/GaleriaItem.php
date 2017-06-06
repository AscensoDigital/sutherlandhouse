<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05-06-17
 * Time: 2:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Class GaleriaItem
 * @package AppBundle\Entity
 * @ORM\Table(name="galeria_item")
 * @ORM\Entity
 * @Vich\Uploadable
 */
class GaleriaItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="galeria_item_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"imagen", "video", "youtube", "vimeo"}, message = "Seleccione un tipo válido")
     */
    protected $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    protected $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="url_miniatura", type="string", length=255, nullable=true)
     */
    protected $urlMiniatura;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=50, nullable=true)
     */
    protected $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string", length=100, nullable=true)
     */
    protected $mimeType;


    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Galeria", inversedBy="galeriaItem")
     * @ORM\JoinTable(name="galeria_x_galeria_item",
     *   joinColumns={
     *     @ORM\JoinColumn(name="galeria_item_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="galeria_id", referencedColumnName="id")
     *   }
     * )
     */
    protected $galeria;

    /**
     * @Vich\UploadableField(mapping="galeria_images", fileNameProperty="url")
     * @var File
     */
    private $imageFile;

    /**
     * @Vich\UploadableField(mapping="galeria_miniatura_images", fileNameProperty="urlMiniatura")
     * @var File
     */
    private $imageFileMin;


    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context, $payload)
    {
        switch ($this->getTipo()){
            case 'imagen':
                if(is_null($this->getUrl()) && is_null($this->imageFile)){
                    $context->buildViolation('Es obligatorio cargar una imagen.')
                        ->atPath('imageFile')
                        ->addViolation();
                }
                if(is_null($this->getUrlMiniatura()) && is_null($this->imageFileMin)){
                    $context->buildViolation('Es obligatorio cargar una miniatura de la imagen.')
                        ->atPath('imageFileMin')
                        ->addViolation();
                }
                break;
            case 'video':
                if(is_null($this->getUrl()) && is_null($this->imageFile)){
                    $context->buildViolation('Es obligatorio cargar un video.')
                        ->atPath('imageFile')
                        ->addViolation();
                }
                if(is_null($this->getUrlMiniatura()) && is_null($this->imageFileMin)){
                    $context->buildViolation('Es obligatorio cargar una imagen base del video.')
                        ->atPath('imageFileMin')
                        ->addViolation();
                }
                break;
            case 'youtube':
            case 'vimeo':
                if(is_null($this->getReferencia()) || strlen(trim($this->getReferencia()))==0){
                    $context->buildViolation('Es obligatorio ingresar el ID del video.')
                        ->atPath('referencia')
                        ->addViolation();
                }
                break;
        }
    }


    public function __toString()
    {
        return $this->getTitulo();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->galeria = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return GaleriaItem
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return GaleriaItem
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return GaleriaItem
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
     * Set urlMiniatura
     *
     * @param string $urlMiniatura
     *
     * @return GaleriaItem
     */
    public function setUrlMiniatura($urlMiniatura)
    {
        $this->urlMiniatura = $urlMiniatura;

        return $this;
    }

    /**
     * Get urlMiniatura
     *
     * @return string
     */
    public function getUrlMiniatura()
    {
        return $this->urlMiniatura;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     *
     * @return GaleriaItem
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param File $imageFile
     * @return GaleriaItem
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
        if(!is_null($imageFile)){
            $this->setMimeType($imageFile->getMimeType());
        }
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
     * @param File $imageFileMin
     * @return GaleriaItem
     */
    public function setImageFileMin($imageFileMin)
    {
        $this->imageFileMin = $imageFileMin;
        return $this;
    }

    /**
     * @return File
     */
    public function getImageFileMin()
    {
        return $this->imageFileMin;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     *
     * @return GaleriaItem
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Add galerium
     *
     * @param \AppBundle\Entity\Galeria $galerium
     *
     * @return GaleriaItem
     */
    public function addGalerium(\AppBundle\Entity\Galeria $galerium)
    {
        $this->galeria[] = $galerium;

        return $this;
    }

    /**
     * Remove galerium
     *
     * @param \AppBundle\Entity\Galeria $galerium
     */
    public function removeGalerium(\AppBundle\Entity\Galeria $galerium)
    {
        $this->galeria->removeElement($galerium);
    }

    /**
     * Get galeria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGaleria()
    {
        return $this->galeria;
    }
}
