FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo_mysql mysqli pdo
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY public /app/
WORKDIR /app
