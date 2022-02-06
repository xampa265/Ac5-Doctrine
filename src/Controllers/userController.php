<?php

namespace App\Controllers;

use App\Entity\Agent;
use App\Core\EntityManager;
use App\Core\AbstractController;


class userController extends AbstractController
//funcion para pasar los datos al repositorio y poder hacer login
{
    public function loginUsers (){

        if (count($_POST)) { // el post contiene datos y los paso a repository para comprobarlo
            $entityManager = (new EntityManager())->get();
            $agentsRepository = $entityManager->getRepository(Agent::class);
            $dato= $_POST["agent_name"];
            $agentsRepository->doLogin($dato);
        }      
        
   //el post esta vacio
    $this->render("login.html.twig", []);
}
}