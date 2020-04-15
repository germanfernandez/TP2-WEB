<!DOCTYPE html>
<html> 
    <head>
        <title>Sistema de Turnos - Turno Reservado</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <?php 
                include 'views/view.header.php'; 
            ?>
        </header>        
        
        <br><br><br>
        <?php    
            echo "El turno para el día {$_POST['fechaturno']} a las {$_POST['horaturno']} se reservó con exito";
        ?>

        <br><br><br>
        <h1>Datos Personales</h1>
        <br><br>

        <h2>Nombre: </h2>
        <?= $_POST['nombre'];?>
        
        <br>
        <h2>Email: </h2>
        <?= $_POST['email'];?>

        <br>
        <h2>Teléfono: </h2> 
        <?= $_POST['tel'];?>

        <br>
        <h2>Edad: </h2>
        <?= $_POST['edad'];?>

        <br>
        <h2>Talla de Calzado: </h2>
        <?= $_POST['talla'];?>

        <br>
        <h2>Altura: </h2>
        <?= $_POST['altura'];?>

        <br>
        <h2>Fecha de Nacimiento: </h2>
        <?= $_POST['nacimiento'];?>

        <br>
        <h2>Color de Pelo: </h2>
        <?= $_POST['cpelo'];?>

        <br><br>
        <h2>Fecha de Turno: </h2>
        <?= $_POST['fechaturno'];?>

        <br>
        <h2>Horario del Turno: </h2>
        <?= $_POST['horaturno'];?>

        <br><br>
        <h2>Diagnostico</h2>
        <img src=<?= "/Diagnosticos/" . $turno->$nombreImagen ?>>
        <br><br>
    </body>
</html>