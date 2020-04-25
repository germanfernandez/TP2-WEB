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

**Comentario**: La información que viaja en el cuerpo de una petición POST **si** que es visible cuando esta en transito (alcanza con hacer una captura con wireshark para ver los datos). Lo que si es cierto es que ninguno de los extremos, y tampoco sistemas intermedios (p.e. Proxys), hacen cache del cuerpo de las peticiones, como si sucede con algunas partes del header (como por ejemplo el path).

## Punto 4
Si dos usuarios cargan imágenes cuyo nombre es el mismo lo que sucederá es que estas van a sobrescribirse y solo quedará guardada la imagen que se cargó recientemente. Para evitar que esto ocurra implementamos un mecanismo en el cuual el nombre de las imágenes se genera a partir de la concatenación del nombre de la imagen más la fecha y hora del turno del paciente.

## Punto 6
### ¿Cómo relaciona la imagen del turno con los datos del turno? Comente alternativas que evaluó y opción elegida.
Se optó por hacer uso del método mencionado en el punto 4, por cuestiones de consistencia.
Una alternativa, tal vez más simple, podría haber sido utilizar los IDs de los turnos para nombrar las imágenes, junto a la fecha del turno. Concatenados en un string debiese ser no solo único como identificador, sino que (si se hiciera lo mismo con los IDs) permitiría que los turnos sean unicos diriamente, y su ID no crezca de manera indefinida con el paso del tiempo.

## Punto 7
### ¿Cómo se identifica y discrimina un turno de otro?
Se pasa el ID del turno como valor en la URL. No es un método seguro, y de la manera que está implementado tendría que ser posible acceder a las fichas de turnos de pacientes puramente utilizando la URL y cambiando dicho valor. Sin embargo la forma más sencilla de implementar un sistema seguro involucra un sistema de cuentas de usuario, con distintos permisos según el individuo.
