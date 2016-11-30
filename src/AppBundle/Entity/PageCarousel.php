<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageCarousel
 *
 * @ORM\Table(name="page_carousel", indexes={@ORM\Index(name="IDX_9D484020CB88BB42", columns={"carousel_tipo_id"}), @ORM\Index(name="IDX_9D484020B1E453D4", columns={"promocion_id"}), @ORM\Index(name="IDX_9D4840204C7F0C30", columns={"modificador_id"})})
 * @ORM\Entity
 */
class PageCarousel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="page_carousel_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pagina", type="string", length=100, nullable=true)
     */
    protected $pagina;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    protected $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="caption_text", type="text", nullable=true)
     */
    protected $captionText;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    protected $activo = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * @var CarouselTipo
     *
     * @ORM\ManyToOne(targetEntity="CarouselTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carousel_tipo_id", referencedColumnName="id")
     * })
     */
    protected $carouselTipo;

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
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modificador_id", referencedColumnName="id")
     * })
     */
    protected $modificador;



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
     * Set pagina
     *
     * @param string $pagina
     *
     * @return PageCarousel
     */
    public function setPagina($pagina)
    {
        $this->pagina = $pagina;

        return $this;
    }

    /**
     * Get pagina
     *
     * @return string
     */
    public function getPagina()
    {
        return $this->pagina;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return PageCarousel
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
     * Set url
     *
     * @param string $url
     *
     * @return PageCarousel
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
     * Set captionText
     *
     * @param string $captionText
     *
     * @return PageCarousel
     */
    public function setCaptionText($captionText)
    {
        $this->captionText = $captionText;

        return $this;
    }

    /**
     * Get captionText
     *
     * @return string
     */
    public function getCaptionText()
    {
        return $this->captionText;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return PageCarousel
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return PageCarousel
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
     * Set carouselTipo
     *
     * @param \AppBundle\Entity\CarouselTipo $carouselTipo
     *
     * @return PageCarousel
     */
    public function setCarouselTipo(\AppBundle\Entity\CarouselTipo $carouselTipo = null)
    {
        $this->carouselTipo = $carouselTipo;

        return $this;
    }

    /**
     * Get carouselTipo
     *
     * @return \AppBundle\Entity\CarouselTipo
     */
    public function getCarouselTipo()
    {
        return $this->carouselTipo;
    }

    /**
     * Set promocion
     *
     * @param \AppBundle\Entity\Promocion $promocion
     *
     * @return PageCarousel
     */
    public function setPromocion(\AppBundle\Entity\Promocion $promocion = null)
    {
        $this->promocion = $promocion;

        return $this;
    }

    /**
     * Get promocion
     *
     * @return \AppBundle\Entity\Promocion
     */
    public function getPromocion()
    {
        return $this->promocion;
    }

    /**
     * Set modificador
     *
     * @param \AppBundle\Entity\Usuario $modificador
     *
     * @return PageCarousel
     */
    public function setModificador(\AppBundle\Entity\Usuario $modificador = null)
    {
        $this->modificador = $modificador;

        return $this;
    }

    /**
     * Get modificador
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getModificador()
    {
        return $this->modificador;
    }
}
