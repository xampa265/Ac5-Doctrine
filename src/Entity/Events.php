<?php


namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventsRepository::class)
 * @ORM\Table(name="events")
 */
class Events{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id_event;

    /** @ORM\Column(type="string", length="100", name="name_event") */
    private $nameEvent;

    /** @ORM\Column(type="string", length="100", name="alias_event") */
    private $aliasEvent;


    /** @ORM\Column(type="string", length="250", name="descrip_event") */
    private $descripEvent;

    /** @ORM\Column(type="datetime",name="date_event") */
    private $dateEvent;

    /** @ORM\Column(type="string", length="250", name="place_event") */
    private $placeEvent;

    /**
     * Un Evento para muchos StatsEvents, Lado de uno, bidireccional
     * @ORM\OneToMany(targetEntity="StatsEvents", mappedBy="idEvent")
     */
    private $statsEvents;


    public function __construct()
    {

        $this->statsEvents = new ArrayCollection();
      
    }

    /**
     * Get the value of Id Event
     *
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * Set the value of Id Event
     *
     * @param mixed $id_event
     *
     * @return self
     */
    public function setIdEvent($id_event)
    {
        $this->id_event = $id_event;

        return $this;
    }

    /**
     * Get the value of Name Event
     *
     * @return mixed
     */
    public function getNameEvent()
    {
        return $this->nameEvent;
    }

    /**
     * Set the value of Name Event
     *
     * @param mixed $nameEvent
     *
     * @return self
     */
    public function setNameEvent($nameEvent)
    {
        $this->nameEvent = $nameEvent;

        return $this;
    }

    /**
     * Get the value of Alias Event
     *
     * @return mixed
     */
    public function getAliasEvent()
    {
        return $this->aliasEvent;
    }

    /**
     * Set the value of Alias Event
     *
     * @param mixed $aliasEvent
     *
     * @return self
     */
    public function setAliasEvent($aliasEvent)
    {
        $this->aliasEvent = $aliasEvent;

        return $this;
    }

    /**
     * Get the value of Descrip Event
     *
     * @return mixed
     */
    public function getDescripEvent()
    {
        return $this->descripEvent;
    }

    /**
     * Set the value of Descrip Event
     *
     * @param mixed $descripEvent
     *
     * @return self
     */
    public function setDescripEvent($descripEvent)
    {
        $this->descripEvent = $descripEvent;

        return $this;
    }

    /**
     * Get the value of Date Event
     *
     * @return mixed
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set the value of Date Event
     *
     * @param mixed $dateEvent
     *
     * @return self
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get the value of Place Event
     *
     * @return mixed
     */
    public function getPlaceEvent()
    {
        return $this->placeEvent;
    }

    /**
     * Set the value of Place Event
     *
     * @param mixed $placeEvent
     *
     * @return self
     */
    public function setPlaceEvent($placeEvent)
    {
        $this->placeEvent = $placeEvent;

        return $this;
    }
    /**
     * Get one event has many StatsEvents. this is the inverse side.
     */
    public function getstatsEvents()
    {
        return $this->statsEvents;
    }


    /**
     * Set one evets has many statsEvents. This is the inverse side.
     *
     * @return  self
     */ 
    public function setStatsEvents($statsEvents)
    {
        $this->statsEvents = $statsEvents;

        return $this;
    }
}
