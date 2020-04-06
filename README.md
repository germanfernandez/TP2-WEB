# TP2-WEB

# Trabajo Practico 2 PHP: Tecnologías del lado del servidor

El objetivo de este tp consiste en entender como un formulario html se traduce en una petición HTTP y como esta es procesada por una aplicación.

# Información del contenido:

## Punto 1
En este trabajo se encuentran validado los datos tanto del lado cliente como del servidor por los siguientes motivos:
Las validaciones en el lado cliente se realizan para evitar que el mismo introduzca datos con una sintaxis incorrecta o erroneos. También consiste en reducir la carga de trabajo en el servidor con información que sabemos que será rechazada. 
Como creemos que la validación del lado cliente no es lo suficientemente segura, también lo hacemos en el servidor para evitar la entrada de datos incorrectos, por ejemplo, a una base de datos.

## Punto 3
La principal diferencia entre recibir los datos del formulario mediante el metodo GET y POST observando las herramientas de desarrollador es que el metodo GET envia los datos mediante la URL, a diferencia del metodo POST en el cual no se pueden observar.

Ejemplo GET
```
Request URL: http://localhost/TP2%20Web/Ejercicio3/Formulario.php?nombre=pedro&email=pedro%40hotmail.com&tel=02323505050&edad=25&talla=42&altura=1.8&nacimiento=1994-05-01&cpelo=Castaño&fechaturno=2020-04-10&horaturno=08%3A00&enviar=Enviar
```

Ejemplo POST
```
Request URL: http://localhost/TP2%20Web/Ejercicio1y2/Formulario.php
```

El metodo POST es adecuado utilizarlo en formularios o en situaciones donde no queramos que los datos enviados sean visibles, a diferencia de GET que es preferible utilizarlo cuando no tengamos que enviar información relevante como por ejemplo, contraseñas o tarjetas de credito.
