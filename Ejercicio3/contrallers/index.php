<?php


if(isset($_GET['submit'])){
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
}








?>