<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 09-05-17
 * Time: 17:23
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faq
 *
 * @ORM\Table(name="faq")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FaqRepository")
 */
class Faq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="faq_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta", type="text", nullable=false)
     */
    protected $pregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta", type="text", nullable=false)
     */
    protected $respuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    protected $orden;

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
     * Set pregunta
     *
     * @param string $pregunta
     *
     * @return Faq
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return string
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     *
     * @return Faq
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Faq
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
     * Set modificador
     *
     * @param Usuario $modificador
     *
     * @return Faq
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
