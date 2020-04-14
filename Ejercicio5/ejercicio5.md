# 5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?

La primera diferencia que se puede observar es que en el ejercicio3 se utiliza el método GET para enviar los datos mientras que en el ejercicio4 se utiliza el método POST.
Otra de las diferencias que encontramos haciendo uso de las herramientas del browser es que el campo Content-Type que se encuentra en el header de las peticiones cambia su contenido con el envio de la imagen.

A continuación se muestras los correspondientes headers:

Header ejercicio 3:

Response Headers
Connection: Keep-Alive
Content-Length: 303
# Content-Type: text/html; charset=UTF-8
Date: Tue, 14 Apr 2020 17:45:45 GMT
Keep-Alive: timeout=5, max=100
Server: Apache/2.4.41 (Win64) PHP/7.3.12
X-Powered-By: PHP/7.3.12

Header ejercicio 4:

X-Powered-By: PHP/7.3.12

Request Headers
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
Accept-Encoding: gzip, deflate, br
Accept-Language: es-ES,es;q=0.9
Cache-Control: max-age=0
Connection: keep-alive
Content-Length: 5193
# Content-Type: multipart/form-data; boundary=----WebKitFormBoundarytbzQ2Ygw7kf7NyNG
Host: localhost
Origin: http://localhost

