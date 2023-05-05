#instalar ( usar la consola de windows wsl2)
- clonar o descargar el repositorio (https://github.com/jjanampa/seo)
  ```
    git clone git@github.com:jjanampa/seo.git
  ```

- incresar a la carpeta descargada
  ```
    cd seo
  ```
- configurar 
  - crear base de datos
  - copiar .env.example a .env
  - en .env configurar acceso a la base de datos creada
   
    
- instalar dependencias

  ```
    composer install
  ```
- ejecutar migraciones de base de datos
  crear base de
  ```
    php artisan migrate
  ```

#acceder a la web:
para acceder a la web debe ir a la siguiente ruta:
http://localhost/seo

#credenciales para acceder a la base de datos:

- host: 127.0.0.1
- contraseña: password
- usuario: sail
- base de datos: seo
