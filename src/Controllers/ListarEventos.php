<?php

namespace App\Controllers;

use App\Entity\Events;
use App\Core\EntityManager;
use App\Core\AbstractController;
use Doctrine\ORM\Events as ORMEvents;

class ListarEventos extends AbstractController

{
    public function listevents (){

        /*** funcion que muestra la lista de eventos  */
        $eventos =  (new EntityManager())->get();
        $EventosRepository = $eventos->getRepository(Events::class);
      
        if(isset( $_SESSION['username'])){  //si no estas logueado te manda a la pagina de inicio

            $this->render("lista.html.twig", [
            "resultados" => $EventosRepository->findAll(),

            ]);
        }else{
           $this->render("inicio.html.twig", []);
        }
    }
}