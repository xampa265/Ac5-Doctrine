<?php


namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 * @ORM\Table(name="agent") 
 */
class Agent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_agent;

    /** @ORM\Column(type="string", length="100", unique="true",name="agent_name") */
    private $agentName;

    /** @ORM\Column(name="`password`",type="string", length="64") */
    private $password ;

    /** @ORM\Column(type="string", length="100",) */

    private $faction;

    /**
     * One agent has many stats. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Stats", mappedBy="idAgent")
     */
     private $agentStats;

    /**
     * One agent has many uploads. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Uploads", mappedBy="idAgent")
     */
    private $agentUploads;

    /**
     * One agent has many stats event. This is the inverse side.
     * @ORM\OneToMany(targetEntity="StatsEvents", mappedBy="idAgent")
     */
    private $agentStatsEvent;


    public function __construct()
    {
      
        $this->agentStats = new ArrayCollection();
        $this-> agentUploads = new ArrayCollection();
        $this->agentStatsEvent = new ArrayCollection();
    }


    /**
     * Get the value of id_agent
     */
    public function getid_agent()
    {
        return $this->id_agent;
    }

    /**
     * Get the value of agentName
     */
    public function getagentName()
    {
        return $this->agentName;
    }

    /**
     * Set the value of agentName
     * @return  self
     */
    public function setagentName($nombre)
    {
        $this->agentName = $nombre;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of faction
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set the value of faction
     *
     * @return  self
     */
    public function setFaction($faction)
    {
        $this->faction= $faction;

        return $this;
    }
    /**
     * Get one agent  has many stats. this is the inverse side.
    */
    public function getagentStats(){
        return $this->agentStats;
    }
    /**
     * Get one agent  has many uploads. this is the inverse side.
     */
    public function getagentUploads()
    {
        return $this->agentUploads;
    }
    /**
     * Get one agent  has many StatsEvents. this is the inverse side.
     */
    public function getagentEstatsEvent()
    {
        return $this->agentStatsEvent;
    }
   
   
     /**
      * Set one agent has many stats. This is the inverse side.
      *
      * @return  self
      */ 
     public function setAgentStats($agentStats)
     {
          $this->agentStats = $agentStats;

          return $this;
     }

    /**
     * Set one agent has many uploads. This is the inverse side.
     *
     * @return  self
     */ 
    public function setAgentUploads($agentUploads)
    {
        $this->agentUploads = $agentUploads;

        return $this;
    }

    /**
     * Set one agent has many stats event. This is the inverse side.
     *
     * @return  self
     */ 
    public function setAgentStatsEvent($agentStatsEvent)
    {
        $this->agentStatsEvent = $agentStatsEvent;

        return $this;
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       