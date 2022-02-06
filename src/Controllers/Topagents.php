<?php

namespace App\Controllers;

use Doctrine\Common\Util\Debug;
use App\Entity\Stats;
use App\Core\AbstractController;
use App\Core\EntityManager;
use App\Repository\StatsRepository;

class TopAgents extends AbstractController
{
    public function showtopstats(){

      if(isset( $_SESSION['username'])){   //si no estas logueado te manda a la pagina de inicio
    

        $entityManager = (new EntityManager())->get();
        $StatsRepository = $entityManager->getRepository(Stats::class);
        $list = $StatsRepository->getCampos();//llama a una funcion del repositorio para crear los campos del select
    
        if(count($_POST)>0){ //la primera vez el post esta vacio
          
             $dat= $_POST["campo"];
             $campo = str_replace(('"'), '', $dat); 
          
             $topagents=$StatsRepository->findBy(array(),[$campo=> 'DESC']); //buscamos por el campo introducido por el usuario
          
             $this->render("TopAgents.html.twig", [
               "resultados" => $topagents, //carga los datos de los agentes
                "datos"=> $list, //carga el select
               "campo"=>$campo //muestra el campo selecionado por el user
            ]);
         }else{
           
             $this->render("TopAgents.html.twig", [
            "datos" => $list
            ]);
        }
       
    }else{
           $this->render("inicio.html.twig", []); //sale al inicio si no estas logueado
     }
    }
}