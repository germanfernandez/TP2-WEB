<?php

namespace App\controllers;

use App\models\Turno;

class NuevoTurnoController {

    public function new() {
        include "views/view.nuevoTurno.php";
    }

    public function save() {       

        if(file_exists('data/data.json')){
            $datos_turno=file_get_contents('data/data.json');
            $array_data= json_decode($datos_turno,true);
            $numeroTurno= count($array_data) + 1;
            
            $extra= array(
                'numeroTurno'=> $numeroTurno,
                'nombre'=> $_POST['nombre'],
                'email'=> $_POST['email'],
                'tel'=> $_POST['tel'],
                'edad'=> $_POST['edad'],
                'talla'=> $_POST['talla'],
                'altura'=> $_POST['altura'],
                'nacimiento'=> $_POST['nacimiento'],
                'cpelo'=> $_POST['cpelo'],
                'fechaturno'=> $_POST['fechaturno'],
                'horaturno'=> $_POST['horaturno'],
            );

            $array_data[]=$extra;
            $datos_finales= json_encode($array_data);
                       
            $extensiones = array(0=>'image/jpeg',1=>'image/png');
     
            $chequeo = true;        
            if($chequeo == true) {
                if(empty($extra['nombre'])){
                    $chequeo = false; 
                } elseif (!preg_match('/^[a-zA-Z0-9\s]+$/', $extra['nombre'])) {
                    $chequeo = false;
                }
                
                if(empty($extra['email'])){
                    $chequeo = false; 
                } elseif(!filter_var($extra['email'], FILTER_VALIDATE_EMAIL)) {
                    $chequeo = false; 
                }
                
                if(empty($extra['tel'])){
                    $chequeo = false;
                }elseif(!is_numeric($extra['tel'])){
                    $chequeo = false;
                }    

                if(empty($extra['nacimiento'])){
                    $chequeo = false;
                }
                
                if(empty($extra['fechaturno'])){
                    $chequeo = false;
                }

                if(empty($extra['talla'])) {
                    $chequeo = false;
                } elseif (!is_numeric($extra['talla'])){
                    $chequeo = false;
                } elseif (($extra['talla']<20) || ($extra['talla']>45)){
                    $chequeo = false;
                }
                
            }
            
            $ruta_nueva = "";
            if ($chequeo == true) {
                if(in_array($_FILES['diagnostico']['type'],$extensiones)){
                   $indexphp = dirname(realpath(__FILE__), 2);
                   $ruta_origen = $_FILES['diagnostico']['tmp_name'];
                 
                   $extensionArchivo = substr($_FILES['diagnostico']['name'],strlen($_FILES['diagnostico']['name'])-4,strlen($_FILES['diagnostico']['name']));
                   $horaNueva = str_replace(':','-',$extra['horaturno']);
                   //uso el nombre del paciente, la fecha del turno y la hora para no reemplazar una foto con el mismo nombre
                   $nombreArchivo = $extra['nombre'].'-'.$extra['fechaturno'].'-'.$horaNueva.$extensionArchivo;
                   $ruta_nueva = $indexphp . '\\Diagnosticos\\' . $nombreArchivo; 
                   if (move_uploaded_file($ruta_origen,$ruta_nueva)){ 
                           //Muestro imagen
                           //echo "<img src='Diagnosticos/".$nombreArchivo."'>";
                   }
                }else{
                   //No hay archivo
                } 
            
                $turno = new Turno($extra, $extensiones, $nombreArchivo);
                if(file_put_contents('data/data.json',$datos_finales)){
                    include "views/view.turnoReservado.php";
                }
            } else {
                //Datos no válidos
            }           
   
        }else{
            $error='ERROR, el archivo JSON no existe';
        }        
    }
}
