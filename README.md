# nginx-php5-fpm
Iniciar contenedor
```
docker run --restart=always -itd -p 80:80 morozco/nginx-php5-fpm
```
Agregar el dominio 127.0.0.1 www.miguel.com al archivo hosts
Iniciar contenedor oficial de postgres
```
docker run -d -p 5432:5432 postgres 
```
En el navegador ingresar a www.miguel.com, deberá aparecer un var_dump del resourceid 
