<?php

namespace App\Controllers;



use App\Core\AbstractController;

use App\Entity\Agent;
use App\Core\EntityManager;
use App\Repository\AgentRepository;
use Doctrine\Common\Util\Debug;

class InicioController extends AbstractController
{
    public function wellcomerusers($id=null){


        $entityManager = (new EntityManager())->get();
        $agentsRepository = $entityManager->getRepository(Agent::class);

    if(isset( $_SESSION['username'])){//si no estas logueado te manda a la pagina de inicio

       
        if($id==null){ //por si acaso se cargara con el id  null
            
            $this->render("wellcome.html.twig", [
         
            ]);

        }else{
          
            $lista= $agentsRepository->findOneBy(["id_agent" => $id])-> getagentStats();//saco las estadisticas de este agente
           
            if( count($lista)<1){// si no  tiene estadisticass
                 $this->render("wellcome.html.twig",[ 
            
                    "mensaje" => "Este usuario no tiene estadisticas todavia"
                ]);
                  
            }else // si las tiene las muestro
            $this->render("wellcome.html.twig", [
            
            "results"=> $lista
            ]);
        }
        
     }else{
           $this->render("inicio.html.twig", []);
     }
   
    }

} 