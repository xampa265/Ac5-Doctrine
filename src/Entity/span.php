<?php


namespace App\Entity;

use App\Repository\SpanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpanRepository::class)
 * @ORM\Table(name="span") 
 */
class Span
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer",name="id_span")
     * @ORM\GeneratedValue
     */
    private $idSpan;

    /** @ORM\Column(type="string", length="100", unique="true",name="time_span") */
    private $timeSpan;


    /**
     * One upload has many stats. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Uploads", mappedBy="timeSpan")
     */
    private $uploads;
    
    public function __construct()
    {
        $this->uploads = new ArrayCollection();
    }
    /**
     * Get the value of id_agent
     */
    public function getidSpan()
    {
        return $this->idSpan;
    }

    /**
     * Get the value of agentName
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Set the value of timeSpan
     * @return  self
     */
    public function setTimeSpan($span)
    {
        $this->timeSpan = $span;

        return $this;

    }
   

    

    /**
     * Get one upload has many stats. This is the inverse side.
     */ 
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * Set one upload has many stats. This is the inverse side.
     *
     * @return  self
     */ 
    public function setUploads($uploads)
    {
        $this->uploads = $uploads;

        return $this;
    }
}
