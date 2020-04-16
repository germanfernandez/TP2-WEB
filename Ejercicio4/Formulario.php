<?php

    
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $edad = $_POST['edad'];
        $talla = $_POST['talla'];
        $altura = $_POST['altura'];
        $nacimiento = $_POST['nacimiento'];
        $cpelo = $_POST['cpelo'];
        $fechaturno = $_POST['fechaturno'];
        $horaturno = $_POST['horaturno'];
    
        $fturno=strtotime($fechaturno);
        $fnacimiento=strtotime($nacimiento);
        $fechaactual= strtotime(date("d-m-Y H:i:00",time()));


        $extensiones = array(0=>'image/jpeg',1=>'image/png');

        echo "<h2>Informacion recibida sobre el turno solicitado</h2>";
        echo "Nombre: " . $nombre . "<br/>";
        echo "Email: " . $email . "<br/>";
        echo "Telefono: " . $tel . "<br/>";
        echo "Edad: " . $edad . "<br/>";
        echo "Talla de Pie: " . $talla . "<br/>";
        echo "Altura: " . $altura . "<br/>";
        echo "Nacimiento: " . $nacimiento . "<br/>";
        echo "Color de Pelo: " . $cpelo . "<br/>";
        echo "Dia del Turno: " . $fechaturno . "<br/>";
        echo "Horario del Turno: " . $horaturno . "<br/><br/>";

        

        if(isset($_POST['submit'])){
            
                if(empty($nombre)){
                    echo "<p class='error'> * Campo nombre incompleto </p>";
                }else{
                    if(!preg_match("/^[a-zA-Z ]*$/",$nombre)){
                        echo "<p class='error'> * El nombre solo debe contener letras</p>";
                    }
                }
            
                if(empty($email)){
                    echo "<p class='error'> * Campo email incompleto </p>";
                }else{
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    echo "<p class='error'> * Email incorrecto </p>";
                }
            

                if(empty($tel)){
                    echo "<p class='error'> * Campo teléfono incompleto </p>";
                }else{
                    if(!is_numeric($tel)){
                        echo "<p class='error'> * Solo se permiten números </p>";
                    }
                }
            
                if((!is_numeric($edad)){
                    echo "<p> *La edad debe ser numérica </p>"
                }else{
                    if(($edad<1) || ($edad>105)){
                        echo "<p class='error'> * La edad debe ser mayor a 1 y menor a 105 </p>";
                    }
                }


                if((!preg_match("/^(0[8-9]|1[0-6]):(00|15|30|45)$/",$horaturno)) &&
                         (!preg_match("/^(17):(00)$/",$horaturno))){
                    echo "<p class='error'> * Turno no válido </p>";
                }
                
                
                if(empty($nacimiento)){
                    echo "<p class='error'> * Campo fecha de nacimiento incompleto </p>";
                }else{
                    if(!preg_match("/^([0-9][0-9][0-9][0-9])-(0[0-9]|1[0-2])-([0-2][0-9]|3[0-1])$/",$nacimiento)){
                        echo "<p class='error'> * Formato de fecha inválida </p>";
                    }
                }else{
                    if($fnacimiento<$fechaactual){
                        echo "<p class='error'> * ERROR! Fecha de nacimiento incorrecta</p>";
                    }
                }
            



                if(empty($fechaturno)){
                    echo "<p class='error'> * Campo fecha de turno incompleto </p>";
                }else{
                    if(!preg_match("/^([0-9][0-9][0-9][0-9])-(0[0-9]|1[0-2])-([0-2][0-9]|3[0-1])$/",$nacimiento)){
                        echo "<p class='error'> * Formato de fecha inválida </p>";
                    }
                }else{
                    if($fturno<$fechaactual){
                        echo "<p class='error'> * La fecha del turno debe ser mayor o igual a la actual</p>";
                    }
                }
            

                if((!is_numeric($altura)){
                    echo "<p> *La altura debe ser numérica </p>"
                }else{
                    if(($altura<0.5) || ($altura>2)){
                        echo "<p class='error'> * La altura debe ser mayor a 0.5 y menor a 2 </p>";
                    }
                }    
                    
                
                if((!is_numeric($talla)){
                    echo "<p> *La altura debe ser numérica </p>"
                }else{

                    if(($talla<20) || ($talla>45)){
                        echo "<p class='error'> * La talla debe ser mayor a 20 y menor a 45 </p>";
                    }
                } 


                if(($cpelo !="Castaño") &&
                ($cpelo !="Rubio") &&
                ($cpelo !="Pelirrojo") &&
                ($cpelo !="Negro")){

                    echo "<p class='error'> * Color de prlo incorrecto </p>";
                }




                if(in_array($_FILES['diagnostico']['type'],$extensiones)){

                    echo "La imagen a cargar es valida<br/>";

                    $indexphp = dirname(realpath(__FILE__));
                    $ruta_origen = $_FILES['diagnostico']['tmp_name'];
                  
                    $extensionArchivo = substr($_FILES['diagnostico']['name'],strlen($_FILES['diagnostico']['name'])-4,strlen($_FILES['diagnostico']['name']));
                    $horaNueva = str_replace(':','-',$horaturno);
                    //uso el nombre del paciente, la fecha del turno y la hora para no reemplazar una foto con el mismo nombre
                    $nombreArchivo = $nombre.'-'.$fechaturno.'-'.$horaNueva.$extensionArchivo;
                    $ruta_nueva = $indexphp . '/Diagnosticos/' . $nombreArchivo; 

                    if (move_uploaded_file($ruta_origen,$ruta_nueva)){ 
                            echo "fichero guardado con exito<br/><br/>";
                            //Muestro imagen
                            echo "<img src='Diagnosticos/".$nombreArchivo."'>";
                    }
                 }else{
                    echo "<p class='error'> * La imagen tiene que ser formato jpg o png </p>";
                 } 
               
        }

?>