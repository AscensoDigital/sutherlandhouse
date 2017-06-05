<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05-06-17
 * Time: 2:13
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Galeria
 * @package AppBundle\Entity
 * @ORM\Table(name="galeria")
 * @ORM\Entity
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\GaleriaItem", inversedBy="galeria")
     * @ORM\JoinTable(name="galeria_x_galeria_item",
     *   joinColumns={
     *     @ORM\JoinColumn(name="galeria_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="galeria_item_id", referencedColumnName="id")
     *   }
     * )
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
}
