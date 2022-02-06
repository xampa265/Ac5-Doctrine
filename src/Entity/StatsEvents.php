<?php


namespace App\Entity;

use App\Repository\StatsEventsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatsEventsRepository::class)
 * @ORM\Table(name="stats_events")
 */
class StatsEvents{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_stats")
     * @ORM\GeneratedValue
     */
    private $idStats;

    /**
     * Muchas estadística para un evento, Lado de Muchos inversedBy, bidireccional
     * @ORM\ManyToOne(targetEntity="Events", inversedBy="statsEvents")
     * @ORM\JoinColumn(name="id_event", referencedColumnName="id_event")
     */
    private $idEvent;

    /**
     * Many StatsEvent have one idupload.This is the owning side. es bidirecional,  inversedBy="UploadsStatsEvents"
     * @ORM\ManyToOne(targetEntity="Uploads")   
     * @ORM\JoinColumn(name="id_upload",referencedColumnName="id_upload" ) 
     */
    private $idUpload;

    /**
     * Many statsEvents have one agent.This is the owning side.
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="agentStatsevent")   
     * @ORM\JoinColumn(name="id_agent",referencedColumnName="id_agent" ) 
     */
    private $idAgent;

    /** @ORM\Column(type="integer", name="lifetime_ap") */
    private $lifetimeAp;

    /** @ORM\Column(type="integer",nullable="true", name="unique_portals_visited") */
    private $uniquePortalsVisited;

    /** @ORM\Column(type="integer",nullable="true", name="resonators_deployed") */
    private $resonatorsDeployed;

    /** @ORM\Column(type="integer",nullable="true",name="links_created") */
    private $linksCreated;

    /** @ORM\Column(type="integer",nullable="true", name="control_fields_created") */
    private $controlFieldsCreated;

    /** @ORM\Column(type="integer",nullable="true",name="xm_recharged") */
    private $xmRecharged;

    /** @ORM\Column(type="integer",nullable="true", name="portals_captured") */
    private $portalsCaptured;

    /** @ORM\Column(type="integer",nullable="true", name="hacks") */
    private $hacks;

    /** @ORM\Column(type="integer",nullable="true", name="resonators_destroyed") */
    private $resonatorsDestroyed;


    /**
     * Get the value of Id Stats
     *
     * @return mixed
     */
    public function getIdStats()
    {
        return $this->idStats;
    }

    /**
     * Set the value of Id Stats
     *
     * @param mixed $idStats
     *
     * @return self
     */
    public function setIdStats($idStats)
    {
        $this->idStats = $idStats;

        return $this;
    }

    /**
     * Get the value of Id Event
     *
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set the value of Id Event
     *
     * @param mixed $idEvent
     *
     * @return self
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    /**
     * Get the value of Id Upload
     *
     * @return mixed
     */
    public function getIdUpload()
    {
        return $this->idUpload;
    }

    /**
     * Set the value of Id Upload
     *
     * @param mixed $idUpload
     *
     * @return self
     */
    public function setIdUpload($idUpload)
    {
        $this->idUpload = $idUpload;

        return $this;
    }

    /**
     * Get the value of Id Agent
     *
     * @return mixed
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set the value of Id Agent
     *
     * @param mixed $idAgent
     *
     * @return self
     */
    public function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;

        return $this;
    }

    /**
     * Get the value of Lifetime Ap
     *
     * @return mixed
     */
    public function getLifetimeAp()
    {
        return $this->lifetimeAp;
    }

    /**
     * Set the value of Lifetime Ap
     *
     * @param mixed $lifetimeAp
     *
     * @return self
     */
    public function setLifetimeAp($lifetimeAp)
    {
        $this->lifetimeAp = $lifetimeAp;

        return $this;
    }

    /**
     * Get the value of Unique Portals Visited
     *
     * @return mixed
     */
    public function getUniquePortalsVisited()
    {
        return $this->uniquePortalsVisited;
    }

    /**
     * Set the value of Unique Portals Visited
     *
     * @param mixed $uniquePortalsVisited
     *
     * @return self
     */
    public function setUniquePortalsVisited($uniquePortalsVisited)
    {
        $this->uniquePortalsVisited = $uniquePortalsVisited;

        return $this;
    }

    /**
     * Get the value of Resonators Deployed
     *
     * @return mixed
     */
    public function getResonatorsDeployed()
    {
        return $this->resonatorsDeployed;
    }

    /**
     * Set the value of Resonators Deployed
     *
     * @param mixed $resonatorsDeployed
     *
     * @return self
     */
    public function setResonatorsDeployed($resonatorsDeployed)
    {
        $this->resonatorsDeployed = $resonatorsDeployed;

        return $this;
    }

    /**
     * Get the value of Links Created
     *
     * @return mixed
     */
    public function getLinksCreated()
    {
        return $this->linksCreated;
    }

    /**
     * Set the value of Links Created
     *
     * @param mixed $linksCreated
     *
     * @return self
     */
    public function setLinksCreated($linksCreated)
    {
        $this->linksCreated = $linksCreated;

        return $this;
    }

    /**
     * Get the value of Control Fields Created
     *
     * @return mixed
     */
    public function getControlFieldsCreated()
    {
        return $this->controlFieldsCreated;
    }

    /**
     * Set the value of Control Fields Created
     *
     * @param mixed $controlFieldsCreated
     *
     * @return self
     */
    public function setControlFieldsCreated($controlFieldsCreated)
    {
        $this->controlFieldsCreated = $controlFieldsCreated;

        return $this;
    }

    /**
     * Get the value of Xm Recharged
     *
     * @return mixed
     */
    public function getXmRecharged()
    {
        return $this->xmRecharged;
    }

    /**
     * Set the value of Xm Recharged
     *
     * @param mixed $xmRecharged
     *
     * @return self
     */
    public function setXmRecharged($xmRecharged)
    {
        $this->xmRecharged = $xmRecharged;

        return $this;
    }

    /**
     * Get the value of Portals Captured
     *
     * @return mixed
     */
    public function getPortalsCaptured()
    {
        return $this->portalsCaptured;
    }

    /**
     * Set the value of Portals Captured
     *
     * @param mixed $portalsCaptured
     *
     * @return self
     */
    public function setPortalsCaptured($portalsCaptured)
    {
        $this->portalsCaptured = $portalsCaptured;

        return $this;
    }

    /**
     * Get the value of Hacks
     *
     * @return mixed
     */
    public function getHacks()
    {
        return $this->hacks;
    }

    /**
     * Set the value of Hacks
     *
     * @param mixed $hacks
     *
     * @return self
     */
    public function setHacks($hacks)
    {
        $this->hacks = $hacks;

        return $this;
    }

    /**
     * Get the value of Resonators Destroyed
     *
     * @return mixed
     */
    public function getResonatorsDestroyed()
    {
        return $this->resonatorsDestroyed;
    }

    /**
     * Set the value of Resonators Destroyed
     *
     * @param mixed $resonatorsDestroyed
     *
     * @return self
     */
    public function setResonatorsDestroyed($resonatorsDestroyed)
    {
        $this->resonatorsDestroyed = $resonatorsDestroyed;

        return $this;
    }

}
