<?php
     include('setup.php');

     $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
     $method = $_SERVER['REQUEST_METHOD'];
 
     if ($path == '/' && $method == 'GET') {
         include('index.view.php');
     } else if ($path == '/save_turno' && $method == 'POST') {
         include('Formulario.php');
     } else {
         http_response_code(404);
         echo "<h1>404 - Not Found</h1>";
     }
?>