<?php

namespace App\Repository;

use App\Entity\Agent;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class AgentRepository extends EntityRepository
{
    // ****   funciona para hacer login de un usuario
    public function doLogin($dato)
    {
        $existeAgente = $this->findOneBy(["agentName" => $dato]); //busco el usuario
       
        if ($existeAgente) { //si existe 
            $pass = $existeAgente->getPassword();//Saco la contraseña del agente encontrado
            $agentId = $existeAgente->getid_agent(); //saco el id  del agente
            if (password_verify(($_POST["password"]), $pass)) { // la contraseña de la bbdd es igual a la introducida y se hace con verify porque estan encriptadas en la bbdd
                    $_SESSION['username'] =  $_POST["agent_name"];
                    header("location:/inicio/$agentId"); // redireciona a a pagina bienvenido
            } else {
                header("location:/errorpass");; //muestro pagina de error la contraseña esta mal
            }
        } else {
            //el user no exixte y redireciono a  pagina de error y de ahi 
        }
    }

    // ****   funciona para hacer registro de un usuario
    public function doRegister($dato)
    {
        $existeAgente = $this->findOneBy(["agentName" => $dato]); //busco el usuario
        $entityManager=$this->getEntityManager();
        if (!$existeAgente) { //si no existe usuario lo creo
            $agent = new agent();
            $agent->setagentName($_POST["agent_name"]);
            $hash = password_hash($_POST["password"], PASSWORD_DEFAULT); // esto sirve para encriptar las contraseñas y que no sean legibles en la bbdd
            $agent->setPassword($hash);
            $agent->setFaction($_POST["faction"]);
            $entityManager->persist($agent);
             $entityManager->flush();

             $nuevoAgente =$this->findOneBy(["agentName" => $_POST["agent_name"]]);
             $idAgente = $nuevoAgente->getid_agent();//lo busco para mandarlo a la pagina de welcome y sacar ahi con la id las stats
             $_SESSION['username'] =  $_POST["agent_name"];
             header("location:/inicio/$idAgente"); // redireccionamos a inicio del usuario *********

        } else {
            header("location:/error"); //muestro pagina de error
        }


    }




}


