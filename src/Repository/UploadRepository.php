<?php

namespace App\Repository;

use App\Entity\Uploads;
use App\Core\EntityManager;
use Doctrine\ORM\EntityRepository;

class UploadRepository extends EntityRepository
{

    ///***funcion para insertar datos en uploads */

    public function insertUploads($idagente, $id_span, $datos,$Event)
    {
        $upload = new Uploads();
        //var_dump($datos);
        //estos datos viene del controlador y estan ya verificados
        $upload->setTimeSpan($id_span);
        $upload->setidAgent($idagente);
        $upload->setIdEvent($Event);
   
         foreach($datos[0] as $key=>$value){ //rrecorremos las cabeceras y $key es el indice $value es lo que contiene

                    
            if($value=="Date (yyyy-mm-dd)"){ //si encontramos la cabecera
                         
                $upload->setDate(new \DateTime($datos[1][$key])); //metemos el datos
                           
                         
            }elseif( $value=="Time (hh:mm:ss)"){
                                                      
                $upload->setTime(new \DateTime( $datos[1][$key]));
            }
                  
        }
        
        $this->getEntityManager()->persist($upload); 
        $this->getEntityManager()->flush();

        return $upload;


    }

}


