<?php

namespace App\Controllers;

use App\Core\EntityManager;
use App\Core\AbstractController;

use App\Entity\Stats;
use App\Entity\Agent ;
use App\Entity\StatsEvents;
use App\Entity\Uploads;
use App\Entity\Span;
use App\Entity\Events;

use Doctrine\Common\Util\Debug;

//Funcion  para subir estadisticas

class SubirEstadisticas extends AbstractController
{
    public function push (){
    
        $entityManager = (new EntityManager())->get();
        
        $agente= $entityManager->getRepository(Agent::class);
        $stats =  $entityManager->getRepository(Stats::class);
        $span  = $entityManager->getRepository(Span::class);
        $event  = $entityManager->getRepository(Events::class);
        $StatsEventsRepository = $entityManager->getRepository(StatsEvents::class);
        $uploadRepository = $entityManager->getRepository(Uploads::class);
        $listEvents=$event->findBy(array(),["id_event"=> 'DESC']);
        
        if(isset( $_SESSION['username'])){//si no estas logueado te manda a la pagina de inicio

            if($_POST){ //ahora post siempre tiene datos menos cuando es la primera vez que se inicia

              if($_POST["datos"]==""){ // si le damos por error al boton si haber puesto los datos vuelve a cargar

                $this->render("pushest.html.twig", [
                    "eventos"=>$listEvents
                ]); 
                }else{ // hay datos y los tratamos
                    
                 
                $datos=$datos=$stats->tratarDatos($_POST);// tratramos los datos para sacar un array bidimensional con cabeceras y datos
                 if (!$datos) { //si datos esta mal la funcion devuelve false y da error
                         $this->render("mensaje.html.twig", [
                        "mensaje" => "Error al subir los datos"
                        ]);
                 } else {
                   
                    foreach($datos[0] as $key=>$value){ // recorro las cabeceras $key es el indice  $valor es lo que contiene

                        if($value=="Agent Name"){ //si encuentra la cabecera
                          
                           $idagente= $agente->findOneBy(["agentName" =>$datos[1][$key]]);//busca el objeto agente
                           $nomAgent=$idagente->getagentName();//saco el nmbre agente
                         
                        }elseif( $value=="Time Span"){
                          
                             $id_span=$span->findOneBy(["timeSpan" => $datos[1][$key]]); 
  
                        }
                    }
                        if($_SESSION['username']==$nomAgent ){ //el usuario logueado coincide con el usuario que sube stadisticas

                        if(count($_POST) <3) {// si $POST es menor que 3 no se ha marcado el evento  vamos a stats
                            $Event=0;  
                            
                            $upload=$uploadRepository->insertUploads($idagente, $id_span, $datos,$Event);

                            if($upload==null){//si uploads esta vacio error en al subir uploads
                                $this->render("mensaje.html.twig", [
                                    "mensaje"=>"ha habido un error al subir las estadisticas.Vuelve a intentarlo"  
                                     ]); 
                            }else{
                                
                                 $stat=$stats->insertStats($upload,$datos, $idagente);
                            }
                            if($stat==null){//si stast esta vacio error al subir stats
                                
                                $this->render("mensaje.html.twig", [
                                    "mensaje"=>"ha habido un error al subir las estadisticas.Vuelve a intentarlo"  
                                     ]);
                            }else{ //si todo ha ido bien 
                                $this->render("mensaje.html.twig", [
                                    "mensaje"=>"Las estadisticas se han subido correctamente"  
                                     ]);
                            }
                            
                        
                        } else {//esta marcados events asi que vamos a statsevents 
                            $Event=1; 
                            $upload=$uploadRepository->insertUploads($idagente, $id_span, $datos,$Event);

                            if($upload==null){//si uploads esta vacio error en al subir uploads
                                $this->render("mensaje.html.twig", [
                                    "mensaje"=>"ha habido un error al subir las estadisticas.Vuelve a intentarlo"  
                                     ]); 
                            }else{//como esta marcado el evento busco el id del evento para pasarselo a statsevents
                                $id=intval($_POST["NumEvento"]);
                                $idEvent=$event->findOneBy(["id_event" =>$id]);
                        
                                $StatEvents= $StatsEventsRepository->insertStats($idEvent,$upload, $datos, $idagente);
                            }
                           if($StatEvents==null){//si stast esta vacio error al subir stats
                                
                                $this->render("mensaje.html.twig", [
                                    "mensaje"=>"ha habido un error al subir las estadisticas.Vuelve a intentarlo"  
                                     ]);
                            }else{ //todo ha salido bien
                                $this->render("mensaje.html.twig", [
                                    "mensaje"=>"Las estadisticas de evento  se han subido correctamente"  
                                     ]);
                            }
                            
                       
                    }

                    }else{ //el agente logueado no coincide con el que sube estadisticas
                         $this->render("mensaje.html.twig", [
                                    "mensaje"=>"el agente logueado no coincide con el agente que esta subiendo estadisticas"  
                                     ]);
                         
                            }        
                }
                   
                }

            }else{
            $this->render("pushest.html.twig", [
                "eventos"=>$listEvents
            ]);
            }
    
        }else{
           $this->render("inicio.html.twig", []);
     }
}
}