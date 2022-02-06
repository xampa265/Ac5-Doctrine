<?php


namespace App\Entity;

use App\Repository\UploadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UploadRepository::class)
 * @ORM\Table(name="uploads") 
 */
class Uploads
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer",name="id_upload")
     * @ORM\GeneratedValue
     */
    private $idUpload;

    /** @ORM\Column(type="date") */
    private $date;
    /** @ORM\Column(type="time") */
    private $time;


    /**
     * Many uploads have one agent.This is the owning side, 
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="agentUploads")   
     * @ORM\JoinColumn(name="id_agent",referencedColumnName="id_agent" ) 
     */
    private $idAgent;

    /**
     * Many uploads have one span.This is the owning side. Es Bidirecional.
     * (name="name de uploadstabla de la entidad en la que estoy",referencedColumnName=" name de span  id_span" ) 
     * @ORM\ManyToOne(targetEntity="Span",inversedBy="uploads" )   
     * @ORM\JoinColumn(name="time_span",referencedColumnName="id_span" ) 
     */
    private $timeSpan;


    /** @ORM\Column(type="boolean", name="id_event") */
    private $idEvent;

   
   
    /**
     * Get the value of id_upload
     */
    public function getidUpload()
    {
        return $this->idUpload;
    }

    /**
     * Get the value of id_agent
     */
    public function getidAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set the value of id_agent
     * @return  self
     */
    public function setidAgent($idagent)
    {
        $this->idAgent = $idagent;

        return $this;
    }
    /**
     * Get the value of fechaCreacion
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of userBirthDate
     *
     * @return  self
     */
    public function setDate($fecha)
    {
        $this->date = $fecha;

        return $this;
    }
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of userBirthDate
     *
     * @return  self
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }
    /**
     * Get the value of password
     */
    public function getTimeSpan()
    {
        return $this -> timeSpan;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setTimeSpan($timeSpan)
    {
        $this->timeSpan = $timeSpan;

        return $this;
    }

    /**
     * Get the value of idEvent
     */ 
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    

    /**
     * Set the value of idEvent
     *
     * @return  self
     */ 
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;

        return $this;
    }


   



}

