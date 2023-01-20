#instalar ( usar la consola de windows wsl2)
- clonar o descargar el repositorio (https://github.com/jjanampa/seo)
  ```
    git clone git@github.com:jjanampa/seo.git
  ```

- incresar a la carpeta descargada
  ```
    cd seo
  ```
- instalar dependencias

  ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
  ```
- levantar proyecto con docker
  ```
    ./vendor/bin/sail up -d
  ```
- ejecutar migraciones de base de datos

  ```
    ./vendor/bin/sail php artisan migrate
  ```

#acceder a la web:
para acceder a la web debe ir a la siguiente ruta:
http://localhost/seo

#credenciales para acceder a la base de datos:

- host: 127.0.0.1
- contraseña: password
- usuario: sail
- base de datos: seo
