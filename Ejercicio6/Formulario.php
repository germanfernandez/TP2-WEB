<?php
        if($_POST){

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
        }
        if(isset($_POST['submit'])){
                if(empty($nombre)){
                    echo "<p class='error'> * Campo nombre incompleto </p>";
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
            
                if(empty($nacimiento)){
                    echo "<p class='error'> * Campo fecha de nacimiento incompleto </p>";
                }
            
                if(empty($fechaturno)){
                    echo "<p class='error'> * Campo fecha de turno incompleto </p>";
                }
            
                if(($talla<20) || ($talla>45)){
                    echo "<p class='error'> * La talla debe ser mayor a 20 y menor a 45 </p>";
                }

                if(file_exists('data/data.json')){
                    $datos_turno=file_get_contents('data/data.json');
                    $array_data= json_decode($datos_turno,true);
                    $numeroTurno+=1;
                    $extra= array(
                        'numeroTurno'=>$numeroTurno,
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
                    if(file_put_contents('data/data.json',$datos_finales)){

                        $message='Turno guardado con éxito';
                    }
    
                }else{
                    $error='ERROR, el archivo JSON no existe';
                }
        }

?>