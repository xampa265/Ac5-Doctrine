<?php 

namespace App\Controllers;
use Doctrine\Common\Util\Debug;
use App\Entity\StatsEvents;
use App\Entity\Events;
use App\Entity\Agent;
use App\Core\EntityManager;//instacia mi clase

use App\Core\AbstractController;

class DetailController extends AbstractController
 {
  /**funcion que muestra la pagina de detalle con el resultado de la consulta de buscar un evento especifico  */
   public function detalleEvento($id)
   {
       if(isset( $_SESSION['username'])){ //si no estas logueado te manda a la pagina de inicio

         $StatsEvents = (new EntityManager())->get();
         $StatsEventsRepository = $StatsEvents->getRepository(StatsEvents::class);
         $agent = (new EntityManager())->get();
         $Stats=$StatsEventsRepository->findBy(["idEvent" => $id]);//busco las estadisticas de este  evento
       
          $this->render("detalle.html.twig", [
         "resultados" => $Stats
         ]);
          
       }else{
           $this->render("inicio.html.twig", []);
      }  
   
  }
}
