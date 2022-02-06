<?php

namespace App\Controllers;
use App\Core\AbstractController;

class SalirController extends AbstractController
//funcion para cerrar la sesion de usuario
{
    public function exit(){

     
      $this->cerrarSesion();
     
     header("location:/login");// redirecciona otra vez a la pagina de login , tb podria ir a inicio segun interese
     
    }

}