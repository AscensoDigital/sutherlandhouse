<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07-06-17
 * Time: 16:33
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Opinion
 * @package AppBundle\Entity
 * @ORM\Table(name="opinion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OpinionRepository")
 */
class Opinion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="opinion_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var integer
     * @ORM\Column(name="valorizacion", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    protected $valorizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="opinion", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    protected $opinion;

    /**
     * @var string
     *
     * @ORM\Column(name="lo_mejor", type="text", nullable=true)
     */
    protected $loMejor;

    /**
     * @var string
     *
     * @ORM\Column(name="por_mejorar", type="text", nullable=true)
     */
    protected $porMejorar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    protected $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta", type="text", nullable=true)
     */
    protected $respuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_respuesta", type="date", nullable=true)
     */
    protected $fechaRespuesta;


    /**
     * @var integer
     * @ORM\Column(name="valor_personal", type="integer", nullable=true)
     */
    protected $valorPersonal;

    /**
     * @var integer
     * @ORM\Column(name="valor_habitacion", type="integer", nullable=true)
     */
    protected $valorHabitacion;

    /**
     * @var integer
     * @ORM\Column(name="valor_descanso", type="integer", nullable=true)
     */
    protected $valorDescanso;

    /**
     * @var integer
     * @ORM\Column(name="valor_desayuno", type="integer", nullable=true)
     */
    protected $valorDesayuno;

    /**
     * @var integer
     * @ORM\Column(name="valor_limpieza", type="integer", nullable=true)
     */
    protected $valorLimpieza;

    /**
     * @var integer
     * @ORM\Column(name="valor_insta_serv", type="integer", nullable=true)
     */
    protected $valorInstaServ;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=5, nullable=false)
     * @Assert\NotBlank()
     */
    protected $pais;

    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     * @Assert\NotBlank()
     */
    protected $nombre;


    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    protected $usuario;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_respuesta_id", referencedColumnName="id")
     * })
     */
    protected $usuarioRespuesta;

    /**
     * @var Habitacion
     *
     * @ORM\ManyToOne(targetEntity="Habitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="habitacion_id", referencedColumnName="id")
     * })
     */
    protected $habitacion;

    public function getDescripcion(){
        $ret='';
        if($this->getLoMejor()){
            $ret.='Lo Mejor: '.$this->getLoMejor();
            if($this->getPorMejorar()){
                $ret.=' - ';
            }
        }
        if($this->getPorMejorar()){
            $ret.='Por Mejorar: '.$this->getPorMejorar();
        }
        return $ret;
    }

    public function getPaisNombre(){
        if(!$this->getPais()){
            return null;
        }
        return Intl::getRegionBundle()->getCountryName($this->getPais());
    }

    public function __toString()
    {
        return $this->getOpinion();
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
     * Set valorizacion
     *
     * @param integer $valorizacion
     *
     * @return Opinion
     */
    public function setValorizacion($valorizacion)
    {
        $this->valorizacion = $valorizacion;

        return $this;
    }

    /**
     * Get valorizacion
     *
     * @return integer
     */
    public function getValorizacion()
    {
        return $this->valorizacion;
    }

    /**
     * Set opinion
     *
     * @param string $opinion
     *
     * @return Opinion
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;

        return $this;
    }

    /**
     * Get opinion
     *
     * @return string
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * Set loMejor
     *
     * @param string $loMejor
     *
     * @return Opinion
     */
    public function setLoMejor($loMejor)
    {
        $this->loMejor = $loMejor;

        return $this;
    }

    /**
     * Get loMejor
     *
     * @return string
     */
    public function getLoMejor()
    {
        return $this->loMejor;
    }

    /**
     * Set porMejorar
     *
     * @param string $porMejorar
     *
     * @return Opinion
     */
    public function setPorMejorar($porMejorar)
    {
        $this->porMejorar = $porMejorar;

        return $this;
    }

    /**
     * Get porMejorar
     *
     * @return string
     */
    public function getPorMejorar()
    {
        return $this->porMejorar;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Opinion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     *
     * @return Opinion
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
     * Set fechaRespuesta
     *
     * @param \DateTime $fechaRespuesta
     *
     * @return Opinion
     */
    public function setFechaRespuesta($fechaRespuesta)
    {
        $this->fechaRespuesta = $fechaRespuesta;

        return $this;
    }

    /**
     * Get fechaRespuesta
     *
     * @return \DateTime
     */
    public function getFechaRespuesta()
    {
        return $this->fechaRespuesta;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Opinion
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
        $this->setNombre($usuario->getNombre());
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set usuarioRespuesta
     *
     * @param \AppBundle\Entity\Usuario $usuarioRespuesta
     *
     * @return Opinion
     */
    public function setUsuarioRespuesta(\AppBundle\Entity\Usuario $usuarioRespuesta = null)
    {
        $this->usuarioRespuesta = $usuarioRespuesta;

        return $this;
    }

    /**
     * Get usuarioRespuesta
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuarioRespuesta()
    {
        return $this->usuarioRespuesta;
    }

    /**
     * Set habitacion
     *
     * @param \AppBundle\Entity\Habitacion $habitacion
     *
     * @return Opinion
     */
    public function setHabitacion(\AppBundle\Entity\Habitacion $habitacion = null)
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    /**
     * Get habitacion
     *
     * @return \AppBundle\Entity\Habitacion
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }

    /**
     * Set valorPersonal
     *
     * @param integer $valorPersonal
     *
     * @return Opinion
     */
    public function setValorPersonal($valorPersonal)
    {
        $this->valorPersonal = $valorPersonal;

        return $this;
    }

    /**
     * Get valorPersonal
     *
     * @return integer
     */
    public function getValorPersonal()
    {
        return $this->valorPersonal;
    }

    /**
     * Set valorHabitacion
     *
     * @param integer $valorHabitacion
     *
     * @return Opinion
     */
    public function setValorHabitacion($valorHabitacion)
    {
        $this->valorHabitacion = $valorHabitacion;

        return $this;
    }

    /**
     * Get valorHabitacion
     *
     * @return integer
     */
    public function getValorHabitacion()
    {
        return $this->valorHabitacion;
    }

    /**
     * Set valorDescanso
     *
     * @param integer $valorDescanso
     *
     * @return Opinion
     */
    public function setValorDescanso($valorDescanso)
    {
        $this->valorDescanso = $valorDescanso;

        return $this;
    }

    /**
     * Get valorDescanso
     *
     * @return integer
     */
    public function getValorDescanso()
    {
        return $this->valorDescanso;
    }

    /**
     * Set valorDesayuno
     *
     * @param integer $valorDesayuno
     *
     * @return Opinion
     */
    public function setValorDesayuno($valorDesayuno)
    {
        $this->valorDesayuno = $valorDesayuno;

        return $this;
    }

    /**
     * Get valorDesayuno
     *
     * @return integer
     */
    public function getValorDesayuno()
    {
        return $this->valorDesayuno;
    }

    /**
     * Set valorLimpieza
     *
     * @param integer $valorLimpieza
     *
     * @return Opinion
     */
    public function setValorLimpieza($valorLimpieza)
    {
        $this->valorLimpieza = $valorLimpieza;

        return $this;
    }

    /**
     * Get valorLimpieza
     *
     * @return integer
     */
    public function getValorLimpieza()
    {
        return $this->valorLimpieza;
    }

    /**
     * Set valorInstaServ
     *
     * @param integer $valorInstaServ
     *
     * @return Opinion
     */
    public function setValorInstaServ($valorInstaServ)
    {
        $this->valorInstaServ = $valorInstaServ;

        return $this;
    }

    /**
     * Get valorInstaServ
     *
     * @return integer
     */
    public function getValorInstaServ()
    {
        return $this->valorInstaServ;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Opinion
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Opinion
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
}
