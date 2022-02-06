<?php


namespace App\Controllers;

use App\Core\AbstractController;

class ErrorController extends AbstractController
{// funcion que muestra el error de  usuario ya existente 
    public function registererrorusers(){

        $this->render("error.html.twig", []);
       
     
    }

}