# Programowanie w chmurze - laboratorium - docker-compose

## Struktura rozwiązania

```
.
├── apache
│   ├── custom.conf
│   └── Dockerfile
├── mysql
│   ├── sql
│   │   └── lampdb.sql
│   └── Dockerfile
├── php
│   └── Dockerfile
├── public
│   └── index.php
├── docker-compose.yaml
└── README.md
```

## Uruchomienie

```shell
docker-compose build
docker-compose up -d
```

Podczas pierwszego uruchomienia należy dać bazie danych chwilę na rozruch. W tym czasie Apache może serwować treść `Błąd połączenia z bazą danych`

## Katalog `public/`

W tym katalogu umieszczony jest kod PHP oraz inne pliki niezbędne do funkcjonowania aplikacji webowej. Katalog ten jest montowany do kontenerów `apache` oraz `php`.

## Serwisy docker-compose

### apache

Serwer www apache2 bazujący na oficjalnym obrazie `httpd:alpine` + modyfikacje konfiguracji umożliwiające użycie `ProxyPassMatch`.

### mysql

Serwer baz danych MySQL bazujący na oficjalnym obrazie `mysql:5.7` + custom sql.

W razie konieczności przebudowania bazy, należy usunąć volumen

```shell
docker volume rm lamp_db
```

### php

Serwer php-fpm bazujący na oficjalnym obrazie `php:7.4-fpm-alpine`

`php/custom.conf` zawiera defaultowy config `php-fpm` ze zmienionymi wartościami dla `user`, `gorup` oraz `listen`

