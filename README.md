# Sistema Autodiagnóstico Covid - 19
### Integrantes del equipo de desarrollo:

 - Hernández Torres Frida Janeth
 - Moreno Parker Pamela Stephanie
 - Puebla Aldama Diego
 - Rojas Fajardo Ximena
 - Tronco Gamboa Iván Antonio

### Instrucciones de instalación

 1. Extraer el contenido del archivo .zip dentro del directorio htdocs de su servidor local.
 2. Abrir el archivo .env y en las siguientes lineas configurar el acceso a su base de datos:

```
DB_CONNECTION=mysql //Se puede usar postgres y poner pgsql pero el sript está diseñado para usar mysql.
DB_HOST=127.0.0.1  //dirección de localhost
DB_PORT=3306  //Puerto de acceso a su BD 
DB_DATABASE=infovi //Nombre de la base de datos
DB_USERNAME=root //Usuario de la base de datos
DB_PASSWORD= //Contraseña de ese usuario de la BD

//IMPORTANTE: GUARDE LOS CAMBIOS EN EL ARCHIVO AL FINALIZAR
```

 3. En la base de datos deberá correr el script sql para crear las tablas necesarias, el archivo se encuentra en `\infovi\db_script.sql`
 4. Ya se encuentra listo para usar el sistema, asegurese de tener arriba su servidor web y mediante el navegador acceda a la liga de la raiz del proyecto por ejemplo: `127.0.0.1/infovi/`
