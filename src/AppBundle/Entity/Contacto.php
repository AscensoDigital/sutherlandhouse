<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 12-06-17
 * Time: 16:22
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="contacto")
 */
class Contacto
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     * @Assert\NotBlank()
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=150, nullable=false)
     * @Assert\NotBlank()
     */
    protected $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     * @Assert\NotBlank()
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=50, nullable=true)
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=false)
     * @Assert\NotBlank()
     */
    protected $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    protected $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    protected $mensaje;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=255, nullable=false)
     */
    protected $origen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;


    public function getFullName(){
        return implode(' ',[$this->getNombre(),$this->getApellidos()]);
    }

    public function getPaisNombre(){
        if(!$this->getPais()){
            return null;
        }
        return Intl::getRegionBundle()->getCountryName($this->getPais());
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
     * @return Contacto
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Contacto
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Contacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Contacto
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
     * Set asunto
     *
     * @param string $asunto
     *
     * @return Contacto
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Contacto
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set origen
     *
     * @param string $origen
     *
     * @return Contacto
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Contacto
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
}
