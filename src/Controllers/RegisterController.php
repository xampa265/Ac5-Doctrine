<?php

namespace App\Controllers;


use App\Entity\Agent;
use App\Core\EntityManager;
use App\Core\AbstractController;


class RegisterController extends AbstractController
{//funcion que pasa los datos para insertar un nuevo usuario
    public function registerusers(){
      
        if (count($_POST)) {
            $entityManager = (new EntityManager())->get();
            $agentsRepository = $entityManager->getRepository(Agent::class);
            $dato = $_POST["agent_name"];
            $agentsRepository->doRegister($dato);
           
         
        }
        $this->render("registro.html.twig", []);
   
    }
}