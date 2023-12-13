# INSTALACION

1 Instalacion con Docker

```
docker run --rm
-u "$(id -u):$(id -g)"
-v "$(pwd):/var/www/html"
-w /var/www/html
laravelsail/php82-composer:latest
composer install --ignore-platform-reqs

```


instalacion del conteiner

```
sail up -d
```

instalacion de npm

```
sail npm install
```

ejecucion de las migraciones

```
sail artisan migrate --seed
```

2 Instalacion normal

composer 

```
composer install
```

npm

```
npm install
```

migracion

```
php artisan migrate --seed
```

Ejecucion

```
php artisan serve
```

ENV BASE DE DATOS

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test-externa
DB_USERNAME=root
DB_PASSWORD=041965
```
RUTA DEL PROYECTO

```
APP_URL=http://127.0.0.1:8000
```




