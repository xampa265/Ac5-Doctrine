<?php


namespace App\Controllers;


use App\Core\AbstractController;

class Contacto extends AbstractController
{
  //esta funcion muestra el contacto de la pagina web

    public function contacto(){

         if(isset( $_SESSION['username'])){ //si no estas logueado te manda a la pagina de inicio

            $this->render("contacto.html.twig", []);
         
     
     }else{
           $this->render("inicio.html.twig", []);
     }
    }

}