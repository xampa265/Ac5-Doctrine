<?php

namespace App\Repository;

use App\Entity\Stats;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class StatsRepository extends EntityRepository
{

//*** Funcion que inserta datos de forma dinamica en Stats */

public function insertStats($uploads, $datos, $idagente)
{
       
        $Stats = new Stats();
        //estos datos vienen del controolador y ya estan verificados

        $Stats->setIdUpload($uploads);
        $Stats->setIdAgent($idagente);
          
        foreach($datos[0] as $key => $value){//recorremos las cabeceras $key es el indice   $valor es lo que contiene
            
           
            if($value=="Level"){      //si encontramos las cabeceras
              $Stats->setLevel($datos[1][$key]); //insertamos el dato
            }else if($value=="Lifetime AP" ){
               $Stats->setLifetimeAp($datos[1][$key]);             
            }else if( $value=="Current AP"){
               $Stats->setCurrentAp($datos[1][$key]);
            }else if( $value=="Unique Portals Visited"){
               $Stats->setUniquePortalsVisited($datos[1][$key]);
            }else if( $value=="Unique Portals Drone Visited"){
                $Stats->setUniquePortalsDroneVisited($datos[1][$key]);
            }else if( $value=="Furthest Drone Distance"){
                $Stats->setFurthestDroneDistance($datos[1][$key]);
            }else if( $value=="Seer"){
                $Stats->setSeer($datos[1][$key]);
            }else if( $value=="Portals Discovered"){
                $Stats->setPortalsDiscovered($datos[1][$key]);
            }else if( $value=="XM Collected"){
                $Stats->setXmCollected($datos[1][$key]);
            }else if( $value=="OPR Agreements"){
                $Stats->setOprAgreements($datos[1][$key]);
            }elseif( $value=="Portal Scans Uploaded"){
                $Stats->setPortalScansUploaded($datos[1][$key]);
            }else if( $value=="Uniques Scout Controlled"){
                $Stats->setUniquesScoutControlled($datos[1][$key]);
            }elseif( $value=="Resonators Deployed"){
                $Stats->setResonatorsDeployed($datos[1][$key]);
            }else if( $value=="Links Created"){
                $Stats->setLinksCreated($datos[1][$key]);
            }elseif( $value=="Control Fields Created"){
               $Stats->setControlFieldsCreated($datos[1][$key]);
            }else if( $value=="Mind Units Captured"){
               $Stats->setMindUnitsCaptured($datos[1][$key]);
            }else if( $value=="Longest Link Ever Created"){
               $Stats->setLongestLinkEverCreated($datos[1][$key]);
            }else if( $value=="Largest Control Field"){
               $Stats->setLargestControlField($datos[1][$key]);
            }else if( $value=="XM Recharged"){
               $Stats->setXmRecharged($datos[1][$key]);
            }else if( $value=="Portals Captured"){
               $Stats->setPortalsCaptured($datos[1][$key]);
            }else if( $value=="Unique Portals Captured"){
               $Stats->setUniquePortalsCaptured($datos[1][$key]);
            }else if( $value=="Mods Deployed"){
               $Stats->setModsDeployed($datos[1][$key]);
            }else if( $value=="Hacks"){
               $Stats->setHacks($datos[1][$key]);
            }else if( $value=="Drone Hacks"){
               $Stats->setDroneHacks($datos[1][$key]);
            }else if( $value=="Glyph Hack Points"){
               $Stats->setGlyphHackPoints($datos[1][$key]);
            }else if( $value=="Completed Hackstreaks"){
               $Stats->setCompletedHackstreaks($datos[1][$key]);
            }else if( $value=="Longest Sojourner Streak"){
               $Stats->setLongestSojournerStreak($datos[1][$key]);
            }else if( $value=="Resonators Destroyed"){
               $Stats->setResonatorsDestroyed($datos[1][$key]);
            }else if( $value=="Portals Neutralized"){
               $Stats->setPortalsNeutralized($datos[1][$key]);
            }else if( $value=="Enemy Links Destroyed"){
               $Stats->setEnemyLinksDestroyed($datos[1][$key]);
            }else if( $value=="Enemy Fields Destroyed"){
               $Stats->setEnemyFieldsDestroyed($datos[1][$key]);
            }else if( $value=="Battle Beacon Combatant"){
               $Stats->setBattleBeaconCombatant($datos[1][$key]);
            }else if( $value=="Drones Returned"){
               $Stats->setDronesReturned($datos[1][$key]);
            }else if( $value=="Max Time Portal Held"){
               $Stats->setMaxTimePortalHeld($datos[1][$key]);
            }else if( $value=="Max Time Link Maintained"){
              $Stats->setMaxTimeLinkMaintained($datos[1][$key]);
            }else if( $value=="Max Link Length x Days"){
              $Stats->setMaxLinkLengthXdays($datos[1][$key]);
            }else if( $value=="Max Time Field Held"){
              $Stats->setMaxTimeFieldHeld($datos[1][$key]);
            }else if( $value=="Largest Field MUs x Days"){
               $Stats->setLargestFieldMusXdays($datos[1][$key]);
            }else if( $value=="Forced Drone Recalls"){
               $Stats->setForcedDroneRecalls($datos[1][$key]);
            }else if( $value=="Distance Walked"){
               $Stats->setDistanceWalked($datos[1][$key]);
            }else if( $value=="Kinetic Capsules Completed"){
               $Stats->setKineticCapsulesCompleted($datos[1][$key]);
            }else if( $value=="Unique Missions Completed"){
               $Stats->setUniqueMissionsCompleted($datos[1][$key]);
            }else if( $value=="Mission Day(s) Attended"){
               $Stats->setMissionDaysAttended($datos[1][$key]);
            }elseif( $value=="NL-1331 Meetup(s) Attended"){
               $Stats->setNl1331MeetupsAttended($datos[1][$key]);
            }else if( $value=="First Saturday Events"){
               $Stats->setFirstSaturdayEvents($datos[1][$key]);
            }else if( $value=="Agents Recruited"){
               $Stats->setAgentsRecruited($datos[1][$key]);
            }else if( $value=="Recursions"){
               $Stats->setRecursions($datos[1][$key]);
            }else if( $value=="Months Subscribed"){
               $Stats->setMonthsSubscribed($datos[1][$key]);
            }else if( $value=="Links Active"){
               $Stats->setLinksActive($datos[1][$key]);
            }else if( $value=="Portals Owned"){
               $Stats->setPortalsOwned($datos[1][$key]);
            }elseif( $value=="Control Fields Active"){
               $Stats->setControlFieldsActive($datos[1][$key]);
            }else if( $value=="Mind Unit Control"){
               $Stats->setMindUnitControl($datos[1][$key]);
            }else if( $value=="Current Hackstreak"){
               $Stats->setCurrentHackstreak($datos[1][$key]);
            }else if( $value=="Current Sojourner Streak"){
               $Stats->setCurrentSojournerStreak($datos[1][$key]);
            }
       }//cierraforeach
        $this->getEntityManager()->persist($Stats);
        $this->getEntityManager()->flush();

        return $Stats;
   
}
    
    //funcion para poblar el select de campos donde se elige la estadistica que se debe mostrar.
    public function getCampos()
    {
        //esta cadena está copiada de la bbdd no se si habria una sql para sacar solo los campos de una tabla(investigare)
        $cadena = "`lifetimeAp`, `level`, `currentAp`, `uniquePortalsVisited`,`uniquePortalsDroneVisited`, `furthestDroneDistance`,`seer`, `portalsDiscovered`, `xmCollected`, `oprAgreements`, `portalScansUploaded`, `uniquesScoutControlled`, `resonatorsDeployed`, `linksCreated`, `controlFieldsCreated`, `mindUnitsCaptured`, `longestLinkEverCreated`, `largestControlField`, `xmRecharged`, `portalsCaptured`, `uniquePortalsCaptured`, `modsDeployed`, `hacks`, `droneHacks`, `glyphHackPoints`, `completedHackstreaks`, `longestSojournerStreak`, `resonatorsDestroyed`, `portalsNeutralized`, `enemyLinksDestroyed`, `enemyFieldsDestroyed`, `battleBeaconCombatant`, `dronesReturned`, `maxTimePortalHeld`, `maxTimeLinkMaintained`, `maxLinkLengthXdays`, `maxTimeFieldHeld`, `largestFieldMusXdays`, `forcedDroneRecalls`, `distanceWalked`, `kineticCapsulesCompleted`, `uniqueMissionsCompleted`, `firstSaturdayEvents`, `agentsRecruited`, `recursions`, `monthsSubscribed`, `linksActive`, `portalsOwned`, `controlFieldsActive`, `mindUnitControl`, `currentHackstreak`, `currentSojournerStreak`, `missionDaysAttended`, `nl1331MeetupsAttended`";
        $array = str_replace(("`"), '', $cadena); //quito las comillas
        $array_datos = explode(", ", $array);


        return $array_datos;
    }

   

    // funcion para sacar los datos del $_post subido
   
    public function tratarDatos($data)
    {

       // el array lo convertimos a string
        $cadena = $data["datos"];
       
        $str = str_replace(('"'), '', $cadena);//me quita las comillas iniciales
        
        $pos0 = strrpos($str , 'Span'); //busco en el string este valor
        $pos1 = strrpos($str , 'Agent Name');//busco en el string este valor
        $pos2 = strrpos($str , 'Agent Faction');//busco en el string este valor
         if($pos0==false || $pos1==false|| $pos2==false ){ // si alguno de los valores no esta no es un string bueno 
         
            return false;
            
         }else{
            
               $datos = explode("\n", $str);// lo mete separado en un array por el salto de linea
               $cuenta=count($datos); //cuento los ndices del array
            
                
                  if($cuenta<2){ //si hay solo un indice es que falta una parte o los datos o la cabecera  y no es bueno
                     return false;
                  }else{ //si estan las dos partes
                     $datos[0] = explode("\t", $datos[0]);//cabeceras
                     $datos[1] = explode("\t", $datos[1]);//datosecho "Se encontró 'ph'\n";
               
                     if ($datos[1][0]=="") { // es posible que solo este el intro pero los datos no esten
                         return false;
                     }else{
                        return $datos;
                     }
                  }
                
         }

      }
   }