# nginx-php5-fpm
Iniciar contenedor con bandera --restart para el autoarranque
```
docker run --restart=always -itd -p 80:80 morozco/nginx-php5-fpm
```
La bandera -p 80:80 mapeará el puerto 80 del docker con el puerto 80 del host. Si se está utilizando el puerto 80 en el host, se debe utilizar un puerto diferente por ejemplo -p 8080:80

Agregar el dominio 127.0.0.1 www.miguel.com al archivo hosts

Descargar imagen oficial de postgres de ducker hub y ejecutarla con el comando
```
docker run -d -p 5432:5432 postgres 
```

Por defecto se creará una base de datos para el usuario postgres llamada también postgres.

En el navegador ingresar a www.miguel.com, deberá aparecerá un formulario para ingresar los datos de conexión a la base de datos. Por defecto se cargarán algunos parámetros de conexión, revisar si la ip del contenedor de base de datos corresponde con la que aparece en el formulario.
