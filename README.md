# SoameeTest 

# Como Desplegar el proyecto:

Al hacer git clone "url del proyecto", obtendremos un directorio donde se encuentran tanto la API-REST como el cliente en distintos subdirectorios.

Despliegue y ejecución de la API:
- Para el despliegue necesitamos tener instalado PHP y Composer, yo recomiendo personalmente instalar el programa Laragon, el cual te instala todo lo necesario (PHP, MySql, Composer, GIT...etc.): https://laragon.org/download/

- Una vez tengamos todo, nos situaremos en la raíz del proyecto y realizamos los siguientes comandos:

· Primero necesitaremos contar con una base de datos en nuestro sistema, a la que llamaremos "soamee".

· Después ejecutamos "composer install" para instalar todas las dependencias del proyecto.

· "php artisan migrate" ( Con este comando generamos las tablas necesarias en el proyecto automáticamente y 'php artisan migrate:fresh' si queremos dropear las tablas).

· "php artisan db:seed" (Con este comando ejecutamos las factorías que rellenaran las tablas con datos fake para que contemos con ellos en nuestro proyecto).

· Por último, para ejecutar la api en el puerto 8000 por defecto, lanzaremos "php artisan serve".


Despliegue y ejecución del cliente:

- Para el despliegue y ejecución del cliente necesitaremos tener instalados nodeJS y npm para poder instalar la cli de Angular que la utilizaremos para lanzar nuestro proyecto con los comandos "ng" de Angular:

· Descargamos e instalamos node y los paquetes npm: https://nodejs.org/es/

· Nos movemos a la raíz del subdirectorio soamee-client,lanzamos "npm install -g @angular/cli" y "npm update", posteriormente lanzamos el comando "ng serve --open" para inicializar nuestro cliente en el navegador.