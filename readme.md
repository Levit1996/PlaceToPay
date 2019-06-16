<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Requerimientos para el funcionamiento del proyecto
<p align="left">
    
- Servidor web
    
- Sistema gestor de bases de datos (PostgreSQL o MySQL)    

- PHP (http://php.net/manual/es/)

- Git (https://git-scm.com/downloads)

- Composer (https://getcomposer.org/download/)
    
## Instalación local 

1- Clonar el repositorio: “git clone https://github.com/Levit1996/PlaceToPay.git ”, en caso de que se presente algún error en la clonación del proyecto, descargar el proyecto en formato ZIP y realizar descompresión del mismo.

2- Crear base de datos en el sistema gestor elegido, si es PostgreSQL:
   
   -Ingresamos a postgresql con el comando “psql -U postgres” 
   
   -Creamos la base de datos con el comando “create database placetopay;”
   
También puede ser creada desde pgAdmin.
           
3- Abrir la carpeta que contiene todo el desarrollo en el editor de texto elegido, renombrar el archivo “.env.example” por “.env”, luego, editar las credenciales de la base de datos, y guardar los cambios.

4- Ejcutar: "composer install"

5- Ejcutar: "php artisan key:generate"

6- Ejecutar: "php artisan migrate"

7- Por último, es necesario realizar la ejecución del proyecto mediante el comando: "php artisan serve". 

<b>Nota:</b> Tener en cuenta que ejecutar este paso en alguna de las siguientes situaciones arrojará algún error. En caso de que suceda, estoy atento para ayudar en la solución del mismo. algunos de los errores puden presentarse por:  

- Servicios de postgresql detenidos o con problemas para que inicien o corran. 

- No existencia de la base de datos previamente creada. 

- Credenciales incorrectas en el archivo .env. 

- Existencia de una anterior base de datos a la cual se le haya hecho ya el proceso de migración. 
    
</p>







