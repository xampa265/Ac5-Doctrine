<?php


namespace App\Controllers;

use App\Core\EntityManager;//instacia mi clase
use App\Core\AbstractController;

class MainController extends AbstractController
{
    //pagina principal donde se elige si quieres registrar un nuevo usuario o 
    //logearte con uno ya existente
    public function main(){

        $this->render("inicio.html.twig", []);
                
      
     
    }

}