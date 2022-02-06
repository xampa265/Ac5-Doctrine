<?php

namespace App\Repository;

use App\Entity\StatsEvents;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class StatsEventsRepository extends EntityRepository
{
  //funciona para insertar statsEvents

  public function insertStats($idEvent,$uploads, $datos, $idagente)
{
     $StatEvents = new StatsEvents();

      //estos datos vienen del controolador y ya estan verificados
        $StatEvents->setIdEvent($idEvent);
        $StatEvents->setIdUpload($uploads);
        $StatEvents->setIdAgent($idagente);

        foreach($datos[0] as $key=>$value){ //recorremos el array de cabeceras $key es el indice $valor es lo que contiene

             //var_dump($value);
            if($value=="Lifetime AP"){         //si encuentra la cabecera 
            
             $StatEvents->setLifetimeAp($datos[1][$key]); //introduce el dato
                  
            }elseif( $value=="Unique Portals Visited"){
               
               $StatEvents->setUniquePortalsVisited($datos[1][$key]); 
                             
            }elseif( $value=="Resonators Deployed"){
               
                $StatEvents->setResonatorsDeployed($datos[1][$key]);
                             
            }elseif( $value=="Links Created"){
              
                $StatEvents->setLinksCreated($datos[1][$key]);
                             
            }elseif( $value=="Control Fields Created"){
               
                $StatEvents->setControlFieldsCreated($datos[1][$key]);
                             
            }elseif( $value=="XM Recharged"){
              
                $StatEvents->setXmRecharged($datos[1][$key]);
                             
            }elseif( $value=="Portals Captured"){
               
                $StatEvents->setPortalsCaptured($datos[1][$key]);
                             
            }elseif( $value=="Hacks"){
              
                $StatEvents->setHacks($datos[1][$key]);             
            } elseif( $value=="Resonators Destroyed"){
              
                 $StatEvents->setResonatorsDestroyed($datos[1][$key]);            
            }
                        

        }
  

        $this->getEntityManager()->persist($StatEvents);
        $this->getEntityManager()->flush();

        return $StatEvents;
}
  
  
  
  
  
    //funcion para calcular la diferencia entre el upload mayor y menor dentro de un mismo evento

    public function diferencia($mayor, $menor, $id)
    {
        
        $mayores = $this->findBy([
            "idEvent" => $id, //busco el evento con el upload mayor
            "idUpload" => $mayor
        ]);
        $menores = $this->findBy([ //busco el evento con el upload menor
            "idEvent" => $id,
            "idUpload" => $menor
        ]);


        foreach ($mayores as $row) { // saca los valores del resultado mayor
            $MayorLifetimeAP = $row->getLifetimeAP();
            $MayoruniquePortalsVisited= $row->getUniquePortalsVisited();
            $MayorresonatorsDeployed= $row->getResonatorsDeployed();
            $MayorlinksCreated= $row->getLinksCreated();
            $MayorcontrolFieldsCreated= $row-> getControlFieldsCreated();
            $MayorxmRecharged= $row->getXmRecharged();
            $MayorportalsCaptured= $row->getPortalsCaptured();
            $Mayorhacks= $row->getHacks();
            $MayorresonatorsDestroyed= $row->getResonatorsDestroyed();
        }
        foreach ($menores as $row) { //saca los valores del resultado menor
            $MenorLifetimeAP = $row->getLifetimeAP();
            $MenoruniquePortalsVisited = $row->getUniquePortalsVisited();
            $MenorresonatorsDeployed = $row->getResonatorsDeployed();
            $MenorlinksCreated = $row->getLinksCreated();
            $MenorcontrolFieldsCreated = $row->getControlFieldsCreated();
            $MenorxmRecharged = $row->getXmRecharged();
            $MenorportalsCaptured = $row->getPortalsCaptured();
            $Menorhacks = $row->getHacks();
            $MenorresonatorsDestroyed = $row->getResonatorsDestroyed();
        }


        //calculo las diferencias y los guardo en un array
        $array["LifetimeAP"] = $MayorLifetimeAP - $MenorLifetimeAP;
        $array["uniquePortalsVisited"] =$MayoruniquePortalsVisited- $MenoruniquePortalsVisited ;
        $array["resonatorsDeployed"] =$MayorresonatorsDeployed -$MenorresonatorsDeployed;
        $array["linksCreated"] =$MayorlinksCreated -$MenorlinksCreated;
        $array["controlFieldsCreated"] =$MayorcontrolFieldsCreated -$MenorcontrolFieldsCreated;
        $array["xmRecharged"] = $MayorxmRecharged-$MenorxmRecharged ;
        $array["portalsCaptured"] =$MayorportalsCaptured -$MenorportalsCaptured ;
        $array["hacks"] =$Mayorhacks - $Menorhacks;
        $array["resonatorsDestroyed"] =$MayorresonatorsDestroyed -$MenorresonatorsDestroyed ;

        return $array; //devuelvo el array

    }
}
