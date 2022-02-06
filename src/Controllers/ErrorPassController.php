<?php


namespace App\Controllers;

use App\Core\AbstractController;

class ErrorPassController extends AbstractController

{
    //funcion que muestra el error de contraseña incorrecta y te da el enlace para intentarlo otra vez
    public function passerrorusers(){

        $this->render("errorpass.html.twig", []);
        
       
     
    }

}