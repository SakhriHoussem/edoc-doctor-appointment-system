FROM php:7.3.25-fpm-alpine

RUN apk update --no-cache \
#    && apk add--no-cache $PHPIZE_DEPS \
    && apk add --no-cache mysql-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli