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

?>