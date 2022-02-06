<?php 

namespace App\Controllers;

use App\Entity\StatsEvents;
use App\Entity\Events;
use App\Entity\Agent;
use App\Core\EntityManager;

use App\Core\AbstractController;

class StatseventsController extends AbstractController
 {
  /**funcion que muestra  la diferencia de estadisticas de un agente en un evento */
   public function difstats($id,$idagent)
   {
      $StatsEvents = (new EntityManager())->get();
      $StatsEventsRepository = $StatsEvents->getRepository(StatsEvents::class);
      $agent = (new EntityManager())->get();


      $result= $StatsEventsRepository->findBy(["idEvent" => $id,
         'idAgent' => $idagent]); //saco todos los eventos de un aagente y un evento     
                                       
      $mayor=0;
      $menor=99999999999;//11 nueves porque es el valor mas alto que puede tener el la bbdd
    
     foreach ($result as $row ){ //recorro el resultado buscando el mayyor y el menor
        if($row->getIdUpload()->getidUpload()>$mayor){
            $mayor= $row->getIdUpload()->getidUpload();
        }
        if($row->getIdUpload()->getidUpload()< $menor){
            $menor = $row->getIdUpload()-> getidUpload();
        }
     
     }
      $diferecia=$StatsEventsRepository->diferencia($mayor, $menor, $id); //los mando al repositorio ara que calcule la diferencia


     $mayores=$StatsEventsRepository->findBy([ //busco las estadiscas del mayor porque quiero mostrarlos
         "idEvent" => $id,
         "idUpload" => $mayor
      ]);
      $menores =$StatsEventsRepository->findBy([//busco las estadiscas del menor porque quiero mostrarlos
         "idEvent" => $id,
         "idUpload" => $menor
      ]);


      

      $this->render("difevents.html.twig", [
         
         "mayor"=>$mayores,
         "menor" => $menores,
         "dife" => $diferecia,
         
      ]);
   }
   
  }