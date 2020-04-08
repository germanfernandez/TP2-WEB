<?php 
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $tel = $_GET['tel'];
        $edad = $_GET['edad'];
        $talla = $_GET['talla'];
        $altura = $_GET['altura'];
        $nacimiento = $_GET['nacimiento'];
        $cpelo = $_GET['cpelo'];
        $fechaturno = $_GET['fechaturno'];
        $horaturno = $_GET['horaturno'];

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

?>