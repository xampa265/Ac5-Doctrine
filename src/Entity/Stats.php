<?php

namespace App\Entity;

use App\Repository\StatsRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=StatsRepository::class)
 * @ORM\Table(name="stats") 
 */
class Stats
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_stats")
     * @ORM\GeneratedValue
     */
    private $idStats;
    /**
     * Many stats have one id_upload.This is the owning side. es unidirecional
     * @ORM\ManyToOne(targetEntity="Uploads", inversedBy="UploadsStats")   
     * @ORM\JoinColumn(name="id_upload",referencedColumnName="id_upload" ) 
     */
    private $idUpload;

    /**
     * Many stats have one agent.This is the owning side. 
     * @ORM\ManyToOne(targetEntity="Agent", inversedBy="agentStats")   
     * @ORM\JoinColumn(name="id_agent",referencedColumnName="id_agent" ) 
      */
    private $idAgent;

     
    /** @ORM\Column(type="integer", name="level") */
    private $level;



    /** @ORM\Column(type="integer", name="lifetime_ap") */
    private $lifetimeAp;

    /** @ORM\Column(type="integer", name="current_ap") */
    private $currentAp;

    /** @ORM\Column(type="integer",nullable="true", name="unique_portals_visited") */
    private $uniquePortalsVisited;

    /** @ORM\Column(type="integer",nullable="true", name="unique_portals_drone_visited") */
    private $uniquePortalsDroneVisited;

    /** @ORM\Column(type="integer",nullable="true", name="furthest_drone_distance") */
    private $furthestDroneDistance;

    /** @ORM\Column(type="integer",nullable="true", name="seer") */
    private $seer;

    /** @ORM\Column(type="integer", nullable="true",name="portals_discovered") */
    private $portalsDiscovered;

    /** @ORM\Column(type="integer", nullable="true",name="xm_collected") */
    private $xmCollected;

    /** @ORM\Column(type="integer",nullable="true", name="opr_agreements") */
    private $oprAgreements;

    /** @ORM\Column(type="integer",nullable="true", name="portal_scans_uploaded") */
    private $portalScansUploaded;

    /** @ORM\Column(type="integer", nullable="true",name="uniques_scout_controlled") */
    private $uniquesScoutControlled;

    /** @ORM\Column(type="integer",nullable="true", name="resonators_deployed") */
    private $resonatorsDeployed;

    /** @ORM\Column(type="integer",nullable="true", name="links_created") */
    private $linksCreated;

    /** @ORM\Column(type="integer",nullable="true", name="control_fields_created") */
    private $controlFieldsCreated;

    /** @ORM\Column(type="integer", nullable="true",name="mind_units_captured") */
    private $mindUnitsCaptured;

    /** @ORM\Column(type="integer", nullable="true",name="longest_link_ever_created") */
    private $longestLinkEverCreated;

    /** @ORM\Column(type="integer", nullable="true",name="largest_control_field") */
    private $largestControlField;

    /** @ORM\Column(type="integer", nullable="true",name="xm_recharged") */
    private $xmRecharged;

    /** @ORM\Column(type="integer", nullable="true",name="portals_captured") */
    private $portalsCaptured;

    /** @ORM\Column(type="integer",nullable="true",name="unique_portals_captured") */
    private $uniquePortalsCaptured;

    /** @ORM\Column(type="integer",nullable="true", name="mods_deployed") */
    private $modsDeployed;

    /** @ORM\Column(type="integer",nullable="true", name="hacks") */
    private $hacks;

    /** @ORM\Column(type="integer",nullable="true", name="drone_hacks") */
    private $droneHacks;

    /** @ORM\Column(type="integer", nullable="true",name="glyph_hack_points") */
    private $glyphHackPoints;

    /** @ORM\Column(type="integer", nullable="true",name="completed_hackstreaks") */
    private $completedHackstreaks;

    /** @ORM\Column(type="integer",nullable="true",name="longest_sojourner_streak") */
    private $longestSojournerStreak;

    /** @ORM\Column(type="integer", nullable="true",name="resonators_destroyed") */
    private $resonatorsDestroyed;


    /** @ORM\Column(type="integer", nullable="true",name="portals_neutralized") */
    private $portalsNeutralized;

    /** @ORM\Column(type="integer", nullable="true",name="enemy_links_destroyed") */
    private $enemyLinksDestroyed;

    /** @ORM\Column(type="integer", nullable="true",name="enemy_fields_destroyed") */
    private $enemyFieldsDestroyed;

    /** @ORM\Column(type="integer", nullable="true",name="battle_beacon_combatant") */
    private $battleBeaconCombatant;

    /** @ORM\Column(type="integer",nullable="true", name="drones_returned") */
    private $dronesReturned;

    /** @ORM\Column(type="integer", nullable="true",name="max_time_portal_held") */
    private $maxTimePortalHeld;

    /** @ORM\Column(type="integer",nullable="true", name="max_time_link_maintained") */
    private $maxTimeLinkMaintained;

    /** @ORM\Column(type="integer",nullable="true", name="max_link_length_x_days") */
    private $maxLinkLengthXdays;

    /** @ORM\Column(type="integer", nullable="true",name="max_time_field_held") */
    private $maxTimeFieldHeld;

    /** @ORM\Column(type="integer",nullable="true", name="largest_field_mus_x_days") */
    private $largestFieldMusXdays;

    /** @ORM\Column(type="integer", nullable="true",name="forced_drone_recalls") */
    private $forcedDroneRecalls;

    /** @ORM\Column(type="integer",nullable="true",name="distance_walked") */
    private $distanceWalked;

    /** @ORM\Column(type="integer",nullable="true", name="kinetic_capsules_completed") */
    private $kineticCapsulesCompleted;

    /** @ORM\Column(type="integer", nullable="true",name="unique_missions_completed") */
    private $uniqueMissionsCompleted;

    /** @ORM\Column(type="integer",nullable="true", name="first_saturday_events") */
    private $firstSaturdayEvents;

    /** @ORM\Column(type="integer",nullable="true", name="agents_recruited") */
    private $agentsRecruited;

    /** @ORM\Column(type="integer",nullable="true",name="recursions") */
    private $recursions;

    /** @ORM\Column(type="integer",nullable="true", name="months_subscribed") */
    private $monthsSubscribed;

    /** @ORM\Column(type="integer",nullable="true",name="links_active") */
    private $linksActive;

    /** @ORM\Column(type="integer", nullable="true",name="portals_owned") */
    private $portalsOwned;

    /** @ORM\Column(type="integer",nullable="true", name="control_fields_active") */
    private $controlFieldsActive;

    /** @ORM\Column(type="integer", nullable="true",name="mind_unit_control") */
    private $mindUnitControl;

    /** @ORM\Column(type="integer", nullable="true",name="current_hackstreak") */
    private $currentHackstreak;

    /** @ORM\Column(type="integer", nullable="true",name="current_sojourner_streak") */
    private $currentSojournerStreak;
    
    

    /** @ORM\Column(type="integer",nullable="true",name="`mission_day(s)_attended`") */
    private $missionDaysAttended;

    /** @ORM\Column(type="integer",nullable="true", name="`nl-1331_meetup(s)_attended`") */
    private $nl1331MeetupsAttended;
 


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
     * Get the value of Level
     *
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of Level
     *
     * @param mixed $level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
     * Get the value of Current Ap
     *
     * @return mixed
     */
    public function getCurrentAp()
    {
        return $this->currentAp;
    }

    /**
     * Set the value of Current Ap
     *
     * @param mixed $currentAp
     *
     * @return self
     */
    public function setCurrentAp($currentAp)
    {
        $this->currentAp = $currentAp;

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
     * Get the value of Unique Portals Drone Visited
     *
     * @return mixed
     */
    public function getUniquePortalsDroneVisited()
    {
        return $this->uniquePortalsDroneVisited;
    }

    /**
     * Set the value of Unique Portals Drone Visited
     *
     * @param mixed $uniquePortalsDroneVisited
     *
     * @return self
     */
    public function setUniquePortalsDroneVisited($uniquePortalsDroneVisited)
    {
        $this->uniquePortalsDroneVisited = $uniquePortalsDroneVisited;

        return $this;
    }

    /**
     * Get the value of Furthest Drone Distance
     *
     * @return mixed
     */
    public function getFurthestDroneDistance()
    {
        return $this->furthestDroneDistance;
    }

    /**
     * Set the value of Furthest Drone Distance
     *
     * @param mixed $furthestDroneDistance
     *
     * @return self
     */
    public function setFurthestDroneDistance($furthestDroneDistance)
    {
        $this->furthestDroneDistance = $furthestDroneDistance;

        return $this;
    }

    /**
     * Get the value of Seer
     *
     * @return mixed
     */
    public function getSeer()
    {
        return $this->seer;
    }

    /**
     * Set the value of Seer
     *
     * @param mixed $seer
     *
     * @return self
     */
    public function setSeer($seer)
    {
        $this->seer = $seer;

        return $this;
    }



    /**
     * Get the value of Portals Discovered
     *
     * @return mixed
     */
    public function getPortalsDiscovered()
    {
        return $this->portalsDiscovered;
    }

    /**
     * Set the value of Portals Discovered
     *
     * @param mixed $portalsDiscovered
     *
     * @return self
     */
    public function setPortalsDiscovered($portalsDiscovered)
    {
        $this->portalsDiscovered = $portalsDiscovered;

        return $this;
    }

    /**
     * Get the value of Xm Collected
     *
     * @return mixed
     */
    public function getXmCollected()
    {
        return $this->xmCollected;
    }

    /**
     * Set the value of Xm Collected
     *
     * @param mixed $xmCollected
     *
     * @return self
     */
    public function setXmCollected($xmCollected)
    {
        $this->xmCollected = $xmCollected;

        return $this;
    }

    /**
     * Get the value of Opr Agreements
     *
     * @return mixed
     */
    public function getOprAgreements()
    {
        return $this->oprAgreements;
    }

    /**
     * Set the value of Opr Agreements
     *
     * @param mixed $oprAgreements
     *
     * @return self
     */
    public function setOprAgreements($oprAgreements)
    {
        $this->oprAgreements = $oprAgreements;

        return $this;
    }

    /**
     * Get the value of Portal Scans Uploaded
     *
     * @return mixed
     */
    public function getPortalScansUploaded()
    {
        return $this->portalScansUploaded;
    }

    /**
     * Set the value of Portal Scans Uploaded
     *
     * @param mixed $portalScansUploaded
     *
     * @return self
     */
    public function setPortalScansUploaded($portalScansUploaded)
    {
        $this->portalScansUploaded = $portalScansUploaded;

        return $this;
    }

    /**
     * Get the value of Uniques Scout Controlled
     *
     * @return mixed
     */
    public function getUniquesScoutControlled()
    {
        return $this->uniquesScoutControlled;
    }

    /**
     * Set the value of Uniques Scout Controlled
     *
     * @param mixed $uniquesScoutControlled
     *
     * @return self
     */
    public function setUniquesScoutControlled($uniquesScoutControlled)
    {
        $this->uniquesScoutControlled = $uniquesScoutControlled;

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
     * Get the value of Mind Units Captured
     *
     * @return mixed
     */
    public function getMindUnitsCaptured()
    {
        return $this->mindUnitsCaptured;
    }

    /**
     * Set the value of Mind Units Captured
     *
     * @param mixed $mindUnitsCaptured
     *
     * @return self
     */
    public function setMindUnitsCaptured($mindUnitsCaptured)
    {
        $this->mindUnitsCaptured = $mindUnitsCaptured;

        return $this;
    }

    /**
     * Get the value of Longest Link Ever Created
     *
     * @return mixed
     */
    public function getLongestLinkEverCreated()
    {
        return $this->longestLinkEverCreated;
    }

    /**
     * Set the value of Longest Link Ever Created
     *
     * @param mixed $longestLinkEverCreated
     *
     * @return self
     */
    public function setLongestLinkEverCreated($longestLinkEverCreated)
    {
        $this->longestLinkEverCreated = $longestLinkEverCreated;

        return $this;
    }

    /**
     * Get the value of Largest Control Field
     *
     * @return mixed
     */
    public function getLargestControlField()
    {
        return $this->largestControlField;
    }

    /**
     * Set the value of Largest Control Field
     *
     * @param mixed $largestControlField
     *
     * @return self
     */
    public function setLargestControlField($largestControlField)
    {
        $this->largestControlField = $largestControlField;

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
     * Get the value of Unique Portals Captured
     *
     * @return mixed
     */
    public function getUniquePortalsCaptured()
    {
        return $this->uniquePortalsCaptured;
    }

    /**
     * Set the value of Unique Portals Captured
     *
     * @param mixed $uniquePortalsCaptured
     *
     * @return self
     */
    public function setUniquePortalsCaptured($uniquePortalsCaptured)
    {
        $this->uniquePortalsCaptured = $uniquePortalsCaptured;

        return $this;
    }

    /**
     * Get the value of Mods Deployed
     *
     * @return mixed
     */
    public function getModsDeployed()
    {
        return $this->modsDeployed;
    }

    /**
     * Set the value of Mods Deployed
     *
     * @param mixed $modsDeployed
     *
     * @return self
     */
    public function setModsDeployed($modsDeployed)
    {
        $this->modsDeployed = $modsDeployed;

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
     * Get the value of Drone Hacks
     *
     * @return mixed
     */
    public function getDroneHacks()
    {
        return $this->droneHacks;
    }

    /**
     * Set the value of Drone Hacks
     *
     * @param mixed $droneHacks
     *
     * @return self
     */
    public function setDroneHacks($droneHacks)
    {
        $this->droneHacks = $droneHacks;

        return $this;
    }

    /**
     * Get the value of Glyph Hack Points
     *
     * @return mixed
     */
    public function getGlyphHackPoints()
    {
        return $this->glyphHackPoints;
    }

    /**
     * Set the value of Glyph Hack Points
     *
     * @param mixed $glyphHackPoints
     *
     * @return self
     */
    public function setGlyphHackPoints($glyphHackPoints)
    {
        $this->glyphHackPoints = $glyphHackPoints;

        return $this;
    }

    /**
     * Get the value of Completed Hackstreaks
     *
     * @return mixed
     */
    public function getCompletedHackstreaks()
    {
        return $this->completedHackstreaks;
    }

    /**
     * Set the value of Completed Hackstreaks
     *
     * @param mixed $completedHackstreaks
     *
     * @return self
     */
    public function setCompletedHackstreaks($completedHackstreaks)
    {
        $this->completedHackstreaks = $completedHackstreaks;

        return $this;
    }

    /**
     * Get the value of Longest Sojourner Streak
     *
     * @return mixed
     */
    public function getLongestSojournerStreak()
    {
        return $this->longestSojournerStreak;
    }

    /**
     * Set the value of Longest Sojourner Streak
     *
     * @param mixed $longestSojournerStreak
     *
     * @return self
     */
    public function setLongestSojournerStreak($longestSojournerStreak)
    {
        $this->longestSojournerStreak = $longestSojournerStreak;

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


    /**
     * Get the value of Portals Neutralized
     *
     * @return mixed
     */
    public function getPortalsNeutralized()
    {
        return $this->portalsNeutralized;
    }

    /**
     * Set the value of Portals Neutralized
     *
     * @param mixed $portalsNeutralized
     *
     * @return self
     */
    public function setPortalsNeutralized($portalsNeutralized)
    {
        $this->portalsNeutralized = $portalsNeutralized;

        return $this;
    }

    /**
     * Get the value of Enemy Links Destroyed
     *
     * @return mixed
     */
    public function getEnemyLinksDestroyed()
    {
        return $this->enemyLinksDestroyed;
    }

    /**
     * Set the value of Enemy Links Destroyed
     *
     * @param mixed $enemyLinksDestroyed
     *
     * @return self
     */
    public function setEnemyLinksDestroyed($enemyLinksDestroyed)
    {
        $this->enemyLinksDestroyed = $enemyLinksDestroyed;

        return $this;
    }

    /**
     * Get the value of Enemy Fields Destroyed
     *
     * @return mixed
     */
    public function getEnemyFieldsDestroyed()
    {
        return $this->enemyFieldsDestroyed;
    }

    /**
     * Set the value of Enemy Fields Destroyed
     *
     * @param mixed $enemyFieldsDestroyed
     *
     * @return self
     */
    public function setEnemyFieldsDestroyed($enemyFieldsDestroyed)
    {
        $this->enemyFieldsDestroyed = $enemyFieldsDestroyed;

        return $this;
    }

    /**
     * Get the value of Battle Beacon Combatant
     *
     * @return mixed
     */
    public function getBattleBeaconCombatant()
    {
        return $this->battleBeaconCombatant;
    }

    /**
     * Set the value of Battle Beacon Combatant
     *
     * @param mixed $battleBeaconCombatant
     *
     * @return self
     */
    public function setBattleBeaconCombatant($battleBeaconCombatant)
    {
        $this->battleBeaconCombatant = $battleBeaconCombatant;

        return $this;
    }

    /**
     * Get the value of Drones Returned
     *
     * @return mixed
     */
    public function getDronesReturned()
    {
        return $this->dronesReturned;
    }

    /**
     * Set the value of Drones Returned
     *
     * @param mixed $dronesReturned
     *
     * @return self
     */
    public function setDronesReturned($dronesReturned)
    {
        $this->dronesReturned = $dronesReturned;

        return $this;
    }

    /**
     * Get the value of Max Time Portal Held
     *
     * @return mixed
     */
    public function getMaxTimePortalHeld()
    {
        return $this->maxTimePortalHeld;
    }

    /**
     * Set the value of Max Time Portal Held
     *
     * @param mixed $maxTimePortalHeld
     *
     * @return self
     */
    public function setMaxTimePortalHeld($maxTimePortalHeld)
    {
        $this->maxTimePortalHeld = $maxTimePortalHeld;

        return $this;
    }

    /**
     * Get the value of Max Time Link Maintained
     *
     * @return mixed
     */
    public function getMaxTimeLinkMaintained()
    {
        return $this->maxTimeLinkMaintained;
    }

    /**
     * Set the value of Max Time Link Maintained
     *
     * @param mixed $maxTimeLinkMaintained
     *
     * @return self
     */
    public function setMaxTimeLinkMaintained($maxTimeLinkMaintained)
    {
        $this->maxTimeLinkMaintained = $maxTimeLinkMaintained;

        return $this;
    }

    /**
     * Get the value of Max Link Length Xdays
     *
     * @return mixed
     */
    public function getMaxLinkLengthXdays()
    {
        return $this->maxLinkLengthXdays;
    }

    /**
     * Set the value of Max Link Length Xdays
     *
     * @param mixed $maxLinkLengthXdays
     *
     * @return self
     */
    public function setMaxLinkLengthXdays($maxLinkLengthXdays)
    {
        $this->maxLinkLengthXdays = $maxLinkLengthXdays;

        return $this;
    }

    /**
     * Get the value of Max Time Field Held
     *
     * @return mixed
     */
    public function getMaxTimeFieldHeld()
    {
        return $this->maxTimeFieldHeld;
    }

    /**
     * Set the value of Max Time Field Held
     *
     * @param mixed $maxTimeFieldHeld
     *
     * @return self
     */
    public function setMaxTimeFieldHeld($maxTimeFieldHeld)
    {
        $this->maxTimeFieldHeld = $maxTimeFieldHeld;

        return $this;
    }

    /**
     * Get the value of Largest Field Mus Xdays
     *
     * @return mixed
     */
    public function getLargestFieldMusXdays()
    {
        return $this->largestFieldMusXdays;
    }

    /**
     * Set the value of Largest Field Mus Xdays
     *
     * @param mixed $largestFieldMusXdays
     *
     * @return self
     */
    public function setLargestFieldMusXdays($largestFieldMusXdays)
    {
        $this->largestFieldMusXdays = $largestFieldMusXdays;

        return $this;
    }

    /**
     * Get the value of Forced Drone Recalls
     *
     * @return mixed
     */
    public function getForcedDroneRecalls()
    {
        return $this->forcedDroneRecalls;
    }

    /**
     * Set the value of Forced Drone Recalls
     *
     * @param mixed $forcedDroneRecalls
     *
     * @return self
     */
    public function setForcedDroneRecalls($forcedDroneRecalls)
    {
        $this->forcedDroneRecalls = $forcedDroneRecalls;

        return $this;
    }

    /**
     * Get the value of Distance Walked
     *
     * @return mixed
     */
    public function getDistanceWalked()
    {
        return $this->distanceWalked;
    }

    /**
     * Set the value of Distance Walked
     *
     * @param mixed $distanceWalked
     *
     * @return self
     */
    public function setDistanceWalked($distanceWalked)
    {
        $this->distanceWalked = $distanceWalked;

        return $this;
    }

    /**
     * Get the value of Kinetic Capsules Completed
     *
     * @return mixed
     */
    public function getKineticCapsulesCompleted()
    {
        return $this->kineticCapsulesCompleted;
    }

    /**
     * Set the value of Kinetic Capsules Completed
     *
     * @param mixed $kineticCapsulesCompleted
     *
     * @return self
     */
    public function setKineticCapsulesCompleted($kineticCapsulesCompleted)
    {
        $this->kineticCapsulesCompleted = $kineticCapsulesCompleted;

        return $this;
    }

    /**
     * Get the value of Unique Missions Completed
     *
     * @return mixed
     */
    public function getUniqueMissionsCompleted()
    {
        return $this->uniqueMissionsCompleted;
    }

    /**
     * Set the value of Unique Missions Completed
     *
     * @param mixed $uniqueMissionsCompleted
     *
     * @return self
     */
    public function setUniqueMissionsCompleted($uniqueMissionsCompleted)
    {
        $this->uniqueMissionsCompleted = $uniqueMissionsCompleted;

        return $this;
    }
    /**
     * Get the value of First Saturday Events
     *
     * @return mixed
     */
    public function getFirstSaturdayEvents()
    {
        return $this->firstSaturdayEvents;
    }

    /**
     * Set the value of First Saturday Events
     *
     * @param mixed $firstSaturdayEvents
     *
     * @return self
     */
    public function setFirstSaturdayEvents($firstSaturdayEvents)
    {
        $this->firstSaturdayEvents = $firstSaturdayEvents;

        return $this;
    }

    /**
     * Get the value of Agents Recruited
     *
     * @return mixed
     */
    public function getAgentsRecruited()
    {
        return $this->agentsRecruited;
    }

    /**
     * Set the value of Agents Recruited
     *
     * @param mixed $agentsRecruited
     *
     * @return self
     */
    public function setAgentsRecruited($agentsRecruited)
    {
        $this->agentsRecruited = $agentsRecruited;

        return $this;
    }

    /**
     * Get the value of Recursions
     *
     * @return mixed
     */
    public function getRecursions()
    {
        return $this->recursions;
    }

    /**
     * Set the value of Recursions
     *
     * @param mixed $recursions
     *
     * @return self
     */
    public function setRecursions($recursions)
    {
        $this->recursions = $recursions;

        return $this;
    }

    /**
     * Get the value of Months Subscribed
     *
     * @return mixed
     */
    public function getMonthsSubscribed()
    {
        return $this->monthsSubscribed;
    }

    /**
     * Set the value of Months Subscribed
     *
     * @param mixed $monthsSubscribed
     *
     * @return self
     */
    public function setMonthsSubscribed($monthsSubscribed)
    {
        $this->monthsSubscribed = $monthsSubscribed;

        return $this;
    }

    /**
     * Get the value of Links Active
     *
     * @return mixed
     */
    public function getLinksActive()
    {
        return $this->linksActive;
    }

    /**
     * Set the value of Links Active
     *
     * @param mixed $linksActive
     *
     * @return self
     */
    public function setLinksActive($linksActive)
    {
        $this->linksActive = $linksActive;

        return $this;
    }

    /**
     * Get the value of Portals Owned
     *
     * @return mixed
     */
    public function getPortalsOwned()
    {
        return $this->portalsOwned;
    }

    /**
     * Set the value of Portals Owned
     *
     * @param mixed $portalsOwned
     *
     * @return self
     */
    public function setPortalsOwned($portalsOwned)
    {
        $this->portalsOwned = $portalsOwned;

        return $this;
    }

    /**
     * Get the value of Control Fields Active
     *
     * @return mixed
     */
    public function getControlFieldsActive()
    {
        return $this->controlFieldsActive;
    }

    /**
     * Set the value of Control Fields Active
     *
     * @param mixed $controlFieldsActive
     *
     * @return self
     */
    public function setControlFieldsActive($controlFieldsActive)
    {
        $this->controlFieldsActive = $controlFieldsActive;

        return $this;
    }

    /**
     * Get the value of Mind Unit Control
     *
     * @return mixed
     */
    public function getMindUnitControl()
    {
        return $this->mindUnitControl;
    }

    /**
     * Set the value of Mind Unit Control
     *
     * @param mixed $mindUnitControl
     *
     * @return self
     */
    public function setMindUnitControl($mindUnitControl)
    {
        $this->mindUnitControl = $mindUnitControl;

        return $this;
    }

    /**
     * Get the value of Current Hackstreak
     *
     * @return mixed
     */
    public function getCurrentHackstreak()
    {
        return $this->currentHackstreak;
    }

    /**
     * Set the value of Current Hackstreak
     *
     * @param mixed $currentHackstreak
     *
     * @return self
     */
    public function setCurrentHackstreak($currentHackstreak)
    {
        $this->currentHackstreak = $currentHackstreak;

        return $this;
    }

    /**
     * Get the value of Current Sojourner Streak
     *
     * @return mixed
     */
    public function getCurrentSojournerStreak()
    {
        return $this->currentSojournerStreak;
    }

    /**
     * Set the value of Current Sojourner Streak
     *
     * @param mixed $currentSojournerStreak
     *
     * @return self
     */
    public function setCurrentSojournerStreak($currentSojournerStreak)
    {
        $this->currentSojournerStreak = $currentSojournerStreak;

        return $this;
    }
   


    /**
     * Get the value of Mission Days Attended
     *
     * @return mixed
     */
    public function getMissionDaysAttended()
    {
        return $this->missionDaysAttended;
    }



    /**
     * Set the value of Mission Days Attended
     *
     * @param mixed $missionDaysAttended
     *
     * @return self
     */
    public function setMissionDaysAttended($missionDaysAttended)
    {
        $this->missionDaysAttended = $missionDaysAttended;

        return $this;
    }

    /**
     * Get the value of Nl Meetups Attended
     *
     * @return mixed
     */
    public function getNl1331MeetupsAttended()
    {
        return $this->nl1331MeetupsAttended;
    }

    /**
     * Set the value of Nl Meetups Attended
     *
     * @param mixed $nl1331MeetupsAttended
     *
     * @return self
     */
    public function setNl1331MeetupsAttended($nl1331MeetupsAttended)
    {
        $this->nl1331MeetupsAttended = $nl1331MeetupsAttended;

        return $this;
    }



}
