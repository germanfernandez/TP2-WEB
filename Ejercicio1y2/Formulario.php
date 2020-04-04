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
        echo "Horario del Turno: " . $horaturno . "<br/>";


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


        if(($talla<20) || ($talla>45){
            echo "<p class='error'> * La talla debe ser mayor a 20 y menor a 45 </p>";
        }


?>