# Pruebas-vocacionales-CSS-UCA
Proyecto de servicio social sobre pruebas vocacionales

## Indicaciones de instalación
Antes que nada debe de ejecutarse apache y mysql/mariadb 
***
1. Crear un archivo .env dentro de la carpeta Codigo Fuente/Pruebas-vocacionales con el siguiente contenido, y cambiar los campos DB_USERNAME y DB_PASSWORD por las credenciales correspondientes que se utilicen en su entorno.
```
APP_NAME=Pruebas
APP_ENV=local
APP_KEY=base64:ZPU4BRWbrz1ZIepGThqPlYaqwJdkCaYC1DnidaFF2Es=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pruebas_vocacionales
DB_USERNAME=Ivette
DB_PASSWORD=a12345678!

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
``` 
2. Crear la base de datos pruebas_vocacionales con la configuración de caracteres utf8_spanish_ci en mariadb.
3. Abrir la consola CMD, ubicarse en la carpeta pruebas_vocacionales y ejecutar el comando composer install.
4. Ejecutar el comando php artisan migrate
5. Dentro de la carpeta database acceder a la carpeta seeds y posteriormente abrir el archivo UserSeeder.php, en él cambiar el email y la contraseña por las credenciales que serán definidas para acceder al sistema potencialmente podría ser dide.cae@uca.edu.sv y la contraseña que se estime conveniente.
6. Ejecutar el comando php artisan db:seed
7. Para ejecutar el programa se usa php artisan serve
8. Debe tener xampp con apache y mysql ejecutandose, y ya se debería poder testear el programa sin problemas.
