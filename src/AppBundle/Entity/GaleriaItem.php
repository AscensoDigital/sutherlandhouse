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
 * Class GaleriaItem
 * @package AppBundle\Entity
 * @ORM\Table(name="galeria_item")
 * @ORM\Entity
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Galeria", mappedBy="galeriaItem")
     */
    protected $galeria;


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
